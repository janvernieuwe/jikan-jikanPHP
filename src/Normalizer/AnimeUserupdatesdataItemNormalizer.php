<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeUserupdatesdataItem;
use Jikan\JikanPHP\Model\UserMeta;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeUserupdatesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeUserupdatesdataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeUserupdatesdataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeUserupdatesdataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeUserupdatesdataItem = new AnimeUserupdatesdataItem();
        if (null === $data || !\is_array($data)) {
            return $animeUserupdatesdataItem;
        }

        if (\array_key_exists('user', $data)) {
            $animeUserupdatesdataItem->setUser($this->denormalizer->denormalize($data['user'], UserMeta::class, 'json', $context));
        }

        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $animeUserupdatesdataItem->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $animeUserupdatesdataItem->setScore(null);
        }

        if (\array_key_exists('status', $data)) {
            $animeUserupdatesdataItem->setStatus($data['status']);
        }

        if (\array_key_exists('episodes_seen', $data) && null !== $data['episodes_seen']) {
            $animeUserupdatesdataItem->setEpisodesSeen($data['episodes_seen']);
        } elseif (\array_key_exists('episodes_seen', $data) && null === $data['episodes_seen']) {
            $animeUserupdatesdataItem->setEpisodesSeen(null);
        }

        if (\array_key_exists('episodes_total', $data) && null !== $data['episodes_total']) {
            $animeUserupdatesdataItem->setEpisodesTotal($data['episodes_total']);
        } elseif (\array_key_exists('episodes_total', $data) && null === $data['episodes_total']) {
            $animeUserupdatesdataItem->setEpisodesTotal(null);
        }

        if (\array_key_exists('date', $data)) {
            $animeUserupdatesdataItem->setDate($data['date']);
        }

        return $animeUserupdatesdataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }

        if (null !== $object->getScore()) {
            $data['score'] = $object->getScore();
        }

        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }

        if (null !== $object->getEpisodesSeen()) {
            $data['episodes_seen'] = $object->getEpisodesSeen();
        }

        if (null !== $object->getEpisodesTotal()) {
            $data['episodes_total'] = $object->getEpisodesTotal();
        }

        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        return $data;
    }
}
