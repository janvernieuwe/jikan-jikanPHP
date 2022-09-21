<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeVideosEpisodesdataItem;
use Jikan\JikanPHP\Model\CommonImages;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeVideosEpisodesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeVideosEpisodesdataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeVideosEpisodesdataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeVideosEpisodesdataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeVideosEpisodesdataItem = new AnimeVideosEpisodesdataItem();
        if (null === $data || !\is_array($data)) {
            return $animeVideosEpisodesdataItem;
        }

        if (\array_key_exists('mal_id', $data)) {
            $animeVideosEpisodesdataItem->setMalId($data['mal_id']);
        }

        if (\array_key_exists('title', $data)) {
            $animeVideosEpisodesdataItem->setTitle($data['title']);
        }

        if (\array_key_exists('episode', $data)) {
            $animeVideosEpisodesdataItem->setEpisode($data['episode']);
        }

        if (\array_key_exists('url', $data)) {
            $animeVideosEpisodesdataItem->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $animeVideosEpisodesdataItem->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
        }

        return $animeVideosEpisodesdataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }

        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        if (null !== $object->getEpisode()) {
            $data['episode'] = $object->getEpisode();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        return $data;
    }
}
