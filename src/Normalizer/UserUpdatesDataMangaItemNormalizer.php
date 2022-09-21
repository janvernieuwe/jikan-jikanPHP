<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaMeta;
use Jikan\JikanPHP\Model\UserUpdatesDataMangaItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserUpdatesDataMangaItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserUpdatesDataMangaItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserUpdatesDataMangaItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserUpdatesDataMangaItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userUpdatesDataMangaItem = new UserUpdatesDataMangaItem();
        if (null === $data || !\is_array($data)) {
            return $userUpdatesDataMangaItem;
        }

        if (\array_key_exists('entry', $data)) {
            $userUpdatesDataMangaItem->setEntry($this->denormalizer->denormalize($data['entry'], MangaMeta::class, 'json', $context));
        }

        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $userUpdatesDataMangaItem->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $userUpdatesDataMangaItem->setScore(null);
        }

        if (\array_key_exists('status', $data)) {
            $userUpdatesDataMangaItem->setStatus($data['status']);
        }

        if (\array_key_exists('chapters_read', $data) && null !== $data['chapters_read']) {
            $userUpdatesDataMangaItem->setChaptersRead($data['chapters_read']);
        } elseif (\array_key_exists('chapters_read', $data) && null === $data['chapters_read']) {
            $userUpdatesDataMangaItem->setChaptersRead(null);
        }

        if (\array_key_exists('chapters_total', $data) && null !== $data['chapters_total']) {
            $userUpdatesDataMangaItem->setChaptersTotal($data['chapters_total']);
        } elseif (\array_key_exists('chapters_total', $data) && null === $data['chapters_total']) {
            $userUpdatesDataMangaItem->setChaptersTotal(null);
        }

        if (\array_key_exists('volumes_read', $data) && null !== $data['volumes_read']) {
            $userUpdatesDataMangaItem->setVolumesRead($data['volumes_read']);
        } elseif (\array_key_exists('volumes_read', $data) && null === $data['volumes_read']) {
            $userUpdatesDataMangaItem->setVolumesRead(null);
        }

        if (\array_key_exists('volumes_total', $data) && null !== $data['volumes_total']) {
            $userUpdatesDataMangaItem->setVolumesTotal($data['volumes_total']);
        } elseif (\array_key_exists('volumes_total', $data) && null === $data['volumes_total']) {
            $userUpdatesDataMangaItem->setVolumesTotal(null);
        }

        if (\array_key_exists('date', $data)) {
            $userUpdatesDataMangaItem->setDate($data['date']);
        }

        return $userUpdatesDataMangaItem;
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

        if (null !== $object->getChaptersRead()) {
            $data['chapters_read'] = $object->getChaptersRead();
        }

        if (null !== $object->getChaptersTotal()) {
            $data['chapters_total'] = $object->getChaptersTotal();
        }

        if (null !== $object->getVolumesRead()) {
            $data['volumes_read'] = $object->getVolumesRead();
        }

        if (null !== $object->getVolumesTotal()) {
            $data['volumes_total'] = $object->getVolumesTotal();
        }

        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        return $data;
    }
}
