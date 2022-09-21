<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Model\UserUpdatesDataAnimeItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserUpdatesDataAnimeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserUpdatesDataAnimeItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserUpdatesDataAnimeItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserUpdatesDataAnimeItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userUpdatesDataAnimeItem = new UserUpdatesDataAnimeItem();
        if (null === $data || !\is_array($data)) {
            return $userUpdatesDataAnimeItem;
        }

        if (\array_key_exists('entry', $data)) {
            $userUpdatesDataAnimeItem->setEntry($this->denormalizer->denormalize($data['entry'], AnimeMeta::class, 'json', $context));
        }

        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $userUpdatesDataAnimeItem->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $userUpdatesDataAnimeItem->setScore(null);
        }

        if (\array_key_exists('status', $data)) {
            $userUpdatesDataAnimeItem->setStatus($data['status']);
        }

        if (\array_key_exists('episodes_seen', $data) && null !== $data['episodes_seen']) {
            $userUpdatesDataAnimeItem->setEpisodesSeen($data['episodes_seen']);
        } elseif (\array_key_exists('episodes_seen', $data) && null === $data['episodes_seen']) {
            $userUpdatesDataAnimeItem->setEpisodesSeen(null);
        }

        if (\array_key_exists('episodes_total', $data) && null !== $data['episodes_total']) {
            $userUpdatesDataAnimeItem->setEpisodesTotal($data['episodes_total']);
        } elseif (\array_key_exists('episodes_total', $data) && null === $data['episodes_total']) {
            $userUpdatesDataAnimeItem->setEpisodesTotal(null);
        }

        if (\array_key_exists('date', $data)) {
            $userUpdatesDataAnimeItem->setDate($data['date']);
        }

        return $userUpdatesDataAnimeItem;
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
