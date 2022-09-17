<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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
        return 'Jikan\\JikanPHP\\Model\\AnimeVideosData' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\AnimeVideosData' === get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param null|mixed $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jikan\JikanPHP\Model\AnimeVideosData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('promo', $data)) {
            $values = [];
            foreach ($data['promo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jikan\\JikanPHP\\Model\\AnimeVideosDataPromoItem', 'json', $context);
            }
            $object->setPromo($values);
        }
        if (\array_key_exists('episodes', $data)) {
            $values_1 = [];
            foreach ($data['episodes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Jikan\\JikanPHP\\Model\\AnimeVideosDataEpisodesItem', 'json', $context);
            }
            $object->setEpisodes($values_1);
        }
        if (\array_key_exists('music_videos', $data)) {
            $values_2 = [];
            foreach ($data['music_videos'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Jikan\\JikanPHP\\Model\\AnimeVideosDataMusicVideosItem', 'json', $context);
            }
            $object->setMusicVideos($values_2);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
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
            foreach ($object->getEpisodes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['episodes'] = $values_1;
        }
        if (null !== $object->getMusicVideos()) {
            $values_2 = [];
            foreach ($object->getMusicVideos() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['music_videos'] = $values_2;
        }

        return $data;
    }
}
