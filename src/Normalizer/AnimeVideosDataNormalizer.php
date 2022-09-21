<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeVideosData;
use Jikan\JikanPHP\Model\AnimeVideosDataEpisodesItem;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItem;
use Jikan\JikanPHP\Model\AnimeVideosDataPromoItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeVideosDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeVideosData::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeVideosData;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeVideosData
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeVideosData = new AnimeVideosData();
        if (null === $data || !\is_array($data)) {
            return $animeVideosData;
        }

        if (\array_key_exists('promo', $data)) {
            $values = [];
            foreach ($data['promo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, AnimeVideosDataPromoItem::class, 'json', $context);
            }

            $animeVideosData->setPromo($values);
        }

        if (\array_key_exists('episodes', $data)) {
            $values_1 = [];
            foreach ($data['episodes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, AnimeVideosDataEpisodesItem::class, 'json', $context);
            }

            $animeVideosData->setEpisodes($values_1);
        }

        if (\array_key_exists('music_videos', $data)) {
            $values_2 = [];
            foreach ($data['music_videos'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, AnimeVideosDataMusicVideosItem::class, 'json', $context);
            }

            $animeVideosData->setMusicVideos($values_2);
        }

        return $animeVideosData;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getPromo()) {
            $values = [];
            foreach ($object->getPromo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $data['promo'] = $values;
        }

        if (null !== $object->getEpisodes()) {
            $values_1 = [];
            foreach ($object->getEpisodes() as $episode) {
                $values_1[] = $this->normalizer->normalize($episode, 'json', $context);
            }

            $data['episodes'] = $values_1;
        }

        if (null !== $object->getMusicVideos()) {
            $values_2 = [];
            foreach ($object->getMusicVideos() as $musicVideo) {
                $values_2[] = $this->normalizer->normalize($musicVideo, 'json', $context);
            }

            $data['music_videos'] = $values_2;
        }

        return $data;
    }
}
