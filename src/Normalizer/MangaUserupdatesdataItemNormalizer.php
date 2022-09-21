<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaUserupdatesdataItem;
use Jikan\JikanPHP\Model\UserMeta;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MangaUserupdatesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return MangaUserupdatesdataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaUserupdatesdataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaUserupdatesdataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaUserupdatesdataItem = new MangaUserupdatesdataItem();
        if (null === $data || !\is_array($data)) {
            return $mangaUserupdatesdataItem;
        }

        if (\array_key_exists('user', $data)) {
            $mangaUserupdatesdataItem->setUser($this->denormalizer->denormalize($data['user'], UserMeta::class, 'json', $context));
        }

        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $mangaUserupdatesdataItem->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $mangaUserupdatesdataItem->setScore(null);
        }

        if (\array_key_exists('status', $data)) {
            $mangaUserupdatesdataItem->setStatus($data['status']);
        }

        if (\array_key_exists('volumes_read', $data)) {
            $mangaUserupdatesdataItem->setVolumesRead($data['volumes_read']);
        }

        if (\array_key_exists('volumes_total', $data)) {
            $mangaUserupdatesdataItem->setVolumesTotal($data['volumes_total']);
        }

        if (\array_key_exists('chapters_read', $data)) {
            $mangaUserupdatesdataItem->setChaptersRead($data['chapters_read']);
        }

        if (\array_key_exists('chapters_total', $data)) {
            $mangaUserupdatesdataItem->setChaptersTotal($data['chapters_total']);
        }

        if (\array_key_exists('date', $data)) {
            $mangaUserupdatesdataItem->setDate($data['date']);
        }

        return $mangaUserupdatesdataItem;
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

        if (null !== $object->getVolumesRead()) {
            $data['volumes_read'] = $object->getVolumesRead();
        }

        if (null !== $object->getVolumesTotal()) {
            $data['volumes_total'] = $object->getVolumesTotal();
        }

        if (null !== $object->getChaptersRead()) {
            $data['chapters_read'] = $object->getChaptersRead();
        }

        if (null !== $object->getChaptersTotal()) {
            $data['chapters_total'] = $object->getChaptersTotal();
        }

        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        return $data;
    }
}
