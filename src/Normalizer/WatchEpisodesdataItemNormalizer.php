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

class WatchEpisodesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\WatchEpisodesdataItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\WatchEpisodesdataItem' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\WatchEpisodesdataItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('entry', $data)) {
            $object->setEntry($this->denormalizer->denormalize($data['entry'], 'Jikan\\JikanPHP\\Model\\AnimeMeta', 'json', $context));
        }
        if (\array_key_exists('episodes', $data)) {
            $values = [];
            foreach ($data['episodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jikan\\JikanPHP\\Model\\WatchEpisodesdataItemEpisodesItem', 'json', $context);
            }
            $object->setEpisodes($values);
        }
        if (\array_key_exists('region_locked', $data)) {
            $object->setRegionLocked($data['region_locked']);
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
        if (null !== $object->getEntry()) {
            $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
        }
        if (null !== $object->getEpisodes()) {
            $values = [];
            foreach ($object->getEpisodes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['episodes'] = $values;
        }
        if (null !== $object->getRegionLocked()) {
            $data['region_locked'] = $object->getRegionLocked();
        }

        return $data;
    }
}
