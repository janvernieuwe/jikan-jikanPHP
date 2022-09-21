<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItem;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItemMeta;
use Jikan\JikanPHP\Model\Trailer;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeVideosDataMusicVideosItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeVideosDataMusicVideosItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeVideosDataMusicVideosItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeVideosDataMusicVideosItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeVideosDataMusicVideosItem = new AnimeVideosDataMusicVideosItem();
        if (null === $data || !\is_array($data)) {
            return $animeVideosDataMusicVideosItem;
        }

        if (\array_key_exists('title', $data)) {
            $animeVideosDataMusicVideosItem->setTitle($data['title']);
        }

        if (\array_key_exists('video', $data)) {
            $animeVideosDataMusicVideosItem->setVideo($this->denormalizer->denormalize($data['video'], Trailer::class, 'json', $context));
        }

        if (\array_key_exists('meta', $data)) {
            $animeVideosDataMusicVideosItem->setMeta($this->denormalizer->denormalize($data['meta'], AnimeVideosDataMusicVideosItemMeta::class, 'json', $context));
        }

        return $animeVideosDataMusicVideosItem;
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

        if (null !== $object->getVideo()) {
            $data['video'] = $this->normalizer->normalize($object->getVideo(), 'json', $context);
        }

        if (null !== $object->getMeta()) {
            $data['meta'] = $this->normalizer->normalize($object->getMeta(), 'json', $context);
        }

        return $data;
    }
}
