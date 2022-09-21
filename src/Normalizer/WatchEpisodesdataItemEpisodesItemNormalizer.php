<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\WatchEpisodesdataItemEpisodesItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class WatchEpisodesdataItemEpisodesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return WatchEpisodesdataItemEpisodesItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof WatchEpisodesdataItemEpisodesItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|WatchEpisodesdataItemEpisodesItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $watchEpisodesdataItemEpisodesItem = new WatchEpisodesdataItemEpisodesItem();
        if (null === $data || !\is_array($data)) {
            return $watchEpisodesdataItemEpisodesItem;
        }

        if (\array_key_exists('mal_id', $data)) {
            $watchEpisodesdataItemEpisodesItem->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $watchEpisodesdataItemEpisodesItem->setUrl($data['url']);
        }

        if (\array_key_exists('title', $data)) {
            $watchEpisodesdataItemEpisodesItem->setTitle($data['title']);
        }

        if (\array_key_exists('premium', $data)) {
            $watchEpisodesdataItemEpisodesItem->setPremium($data['premium']);
        }

        return $watchEpisodesdataItemEpisodesItem;
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

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        if (null !== $object->getPremium()) {
            $data['premium'] = $object->getPremium();
        }

        return $data;
    }
}
