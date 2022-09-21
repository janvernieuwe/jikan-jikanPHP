<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserProfileFullStatisticsManga;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserProfileFullStatisticsMangaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserProfileFullStatisticsManga::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserProfileFullStatisticsManga;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserProfileFullStatisticsManga
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userProfileFullStatisticsManga = new UserProfileFullStatisticsManga();
        if (\array_key_exists('days_read', $data) && \is_int($data['days_read'])) {
            $data['days_read'] = (float) $data['days_read'];
        }

        if (\array_key_exists('mean_score', $data) && \is_int($data['mean_score'])) {
            $data['mean_score'] = (float) $data['mean_score'];
        }

        if (null === $data || !\is_array($data)) {
            return $userProfileFullStatisticsManga;
        }

        if (\array_key_exists('days_read', $data)) {
            $userProfileFullStatisticsManga->setDaysRead($data['days_read']);
        }

        if (\array_key_exists('mean_score', $data)) {
            $userProfileFullStatisticsManga->setMeanScore($data['mean_score']);
        }

        if (\array_key_exists('reading', $data)) {
            $userProfileFullStatisticsManga->setReading($data['reading']);
        }

        if (\array_key_exists('completed', $data)) {
            $userProfileFullStatisticsManga->setCompleted($data['completed']);
        }

        if (\array_key_exists('on_hold', $data)) {
            $userProfileFullStatisticsManga->setOnHold($data['on_hold']);
        }

        if (\array_key_exists('dropped', $data)) {
            $userProfileFullStatisticsManga->setDropped($data['dropped']);
        }

        if (\array_key_exists('plan_to_read', $data)) {
            $userProfileFullStatisticsManga->setPlanToRead($data['plan_to_read']);
        }

        if (\array_key_exists('total_entries', $data)) {
            $userProfileFullStatisticsManga->setTotalEntries($data['total_entries']);
        }

        if (\array_key_exists('reread', $data)) {
            $userProfileFullStatisticsManga->setReread($data['reread']);
        }

        if (\array_key_exists('chapters_read', $data)) {
            $userProfileFullStatisticsManga->setChaptersRead($data['chapters_read']);
        }

        if (\array_key_exists('volumes_read', $data)) {
            $userProfileFullStatisticsManga->setVolumesRead($data['volumes_read']);
        }

        return $userProfileFullStatisticsManga;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDaysRead()) {
            $data['days_read'] = $object->getDaysRead();
        }

        if (null !== $object->getMeanScore()) {
            $data['mean_score'] = $object->getMeanScore();
        }

        if (null !== $object->getReading()) {
            $data['reading'] = $object->getReading();
        }

        if (null !== $object->getCompleted()) {
            $data['completed'] = $object->getCompleted();
        }

        if (null !== $object->getOnHold()) {
            $data['on_hold'] = $object->getOnHold();
        }

        if (null !== $object->getDropped()) {
            $data['dropped'] = $object->getDropped();
        }

        if (null !== $object->getPlanToRead()) {
            $data['plan_to_read'] = $object->getPlanToRead();
        }

        if (null !== $object->getTotalEntries()) {
            $data['total_entries'] = $object->getTotalEntries();
        }

        if (null !== $object->getReread()) {
            $data['reread'] = $object->getReread();
        }

        if (null !== $object->getChaptersRead()) {
            $data['chapters_read'] = $object->getChaptersRead();
        }

        if (null !== $object->getVolumesRead()) {
            $data['volumes_read'] = $object->getVolumesRead();
        }

        return $data;
    }
}
