<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeVideosDataPromoItem;
use Jikan\JikanPHP\Model\Trailer;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeVideosDataPromoItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeVideosDataPromoItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeVideosDataPromoItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeVideosDataPromoItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeVideosDataPromoItem = new AnimeVideosDataPromoItem();
        if (null === $data || !\is_array($data)) {
            return $animeVideosDataPromoItem;
        }

        if (\array_key_exists('title', $data)) {
            $animeVideosDataPromoItem->setTitle($data['title']);
        }

        if (\array_key_exists('trailer', $data)) {
            $animeVideosDataPromoItem->setTrailer($this->denormalizer->denormalize($data['trailer'], Trailer::class, 'json', $context));
        }

        return $animeVideosDataPromoItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        if (null !== $object->getTrailer()) {
            $data['trailer'] = $this->normalizer->normalize($object->getTrailer(), 'json', $context);
        }

        return $data;
    }
}
