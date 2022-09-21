<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Model\PersonFullAnimeItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonFullAnimeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return PersonFullAnimeItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof PersonFullAnimeItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|PersonFullAnimeItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $personFullAnimeItem = new PersonFullAnimeItem();
        if (null === $data || !\is_array($data)) {
            return $personFullAnimeItem;
        }

        if (\array_key_exists('position', $data)) {
            $personFullAnimeItem->setPosition($data['position']);
        }

        if (\array_key_exists('anime', $data)) {
            $personFullAnimeItem->setAnime($this->denormalizer->denormalize($data['anime'], AnimeMeta::class, 'json', $context));
        }

        return $personFullAnimeItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }

        if (null !== $object->getAnime()) {
            $data['anime'] = $this->normalizer->normalize($object->getAnime(), 'json', $context);
        }

        return $data;
    }
}
