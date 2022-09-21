<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterImages;
use Jikan\JikanPHP\Model\CharacterImagesJpg;
use Jikan\JikanPHP\Model\CharacterImagesWebp;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CharacterImagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return CharacterImages::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof CharacterImages;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|CharacterImages
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $characterImages = new CharacterImages();
        if (null === $data || !\is_array($data)) {
            return $characterImages;
        }

        if (\array_key_exists('jpg', $data)) {
            $characterImages->setJpg($this->denormalizer->denormalize($data['jpg'], CharacterImagesJpg::class, 'json', $context));
        }

        if (\array_key_exists('webp', $data)) {
            $characterImages->setWebp($this->denormalizer->denormalize($data['webp'], CharacterImagesWebp::class, 'json', $context));
        }

        return $characterImages;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getJpg()) {
            $data['jpg'] = $this->normalizer->normalize($object->getJpg(), 'json', $context);
        }

        if (null !== $object->getWebp()) {
            $data['webp'] = $this->normalizer->normalize($object->getWebp(), 'json', $context);
        }

        return $data;
    }
}
