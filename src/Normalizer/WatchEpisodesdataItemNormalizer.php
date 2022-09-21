<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Model\WatchEpisodesdataItem;
use Jikan\JikanPHP\Model\WatchEpisodesdataItemEpisodesItem;
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
        return WatchEpisodesdataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof WatchEpisodesdataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|WatchEpisodesdataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $watchEpisodesdataItem = new WatchEpisodesdataItem();
        if (null === $data || !\is_array($data)) {
            return $watchEpisodesdataItem;
        }

        if (\array_key_exists('entry', $data)) {
            $watchEpisodesdataItem->setEntry($this->denormalizer->denormalize($data['entry'], AnimeMeta::class, 'json', $context));
        }

        if (\array_key_exists('episodes', $data)) {
            $values = [];
            foreach ($data['episodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, WatchEpisodesdataItemEpisodesItem::class, 'json', $context);
            }

            $watchEpisodesdataItem->setEpisodes($values);
        }

        if (\array_key_exists('region_locked', $data)) {
            $watchEpisodesdataItem->setRegionLocked($data['region_locked']);
        }

        return $watchEpisodesdataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getEntry()) {
            $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
        }

        if (null !== $object->getEpisodes()) {
            $values = [];
            foreach ($object->getEpisodes() as $episode) {
                $values[] = $this->normalizer->normalize($episode, 'json', $context);
            }

            $data['episodes'] = $values;
        }

        if (null !== $object->getRegionLocked()) {
            $data['region_locked'] = $object->getRegionLocked();
        }

        return $data;
    }
}
