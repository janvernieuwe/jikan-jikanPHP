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

class UserUpdatesDataMangaItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\UserUpdatesDataMangaItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\UserUpdatesDataMangaItem' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\UserUpdatesDataMangaItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('entry', $data)) {
            $object->setEntry($this->denormalizer->denormalize($data['entry'], 'Jikan\\JikanPHP\\Model\\MangaMeta', 'json', $context));
        }
        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $object->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $object->setScore(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('chapters_read', $data) && null !== $data['chapters_read']) {
            $object->setChaptersRead($data['chapters_read']);
        } elseif (\array_key_exists('chapters_read', $data) && null === $data['chapters_read']) {
            $object->setChaptersRead(null);
        }
        if (\array_key_exists('chapters_total', $data) && null !== $data['chapters_total']) {
            $object->setChaptersTotal($data['chapters_total']);
        } elseif (\array_key_exists('chapters_total', $data) && null === $data['chapters_total']) {
            $object->setChaptersTotal(null);
        }
        if (\array_key_exists('volumes_read', $data) && null !== $data['volumes_read']) {
            $object->setVolumesRead($data['volumes_read']);
        } elseif (\array_key_exists('volumes_read', $data) && null === $data['volumes_read']) {
            $object->setVolumesRead(null);
        }
        if (\array_key_exists('volumes_total', $data) && null !== $data['volumes_total']) {
            $object->setVolumesTotal($data['volumes_total']);
        } elseif (\array_key_exists('volumes_total', $data) && null === $data['volumes_total']) {
            $object->setVolumesTotal(null);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
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
