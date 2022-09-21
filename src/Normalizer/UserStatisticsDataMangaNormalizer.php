<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserStatisticsDataManga;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserStatisticsDataMangaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserStatisticsDataManga::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserStatisticsDataManga;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserStatisticsDataManga
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userStatisticsDataManga = new UserStatisticsDataManga();
        if (\array_key_exists('days_read', $data) && \is_int($data['days_read'])) {
            $data['days_read'] = (float) $data['days_read'];
        }

        if (\array_key_exists('mean_score', $data) && \is_int($data['mean_score'])) {
            $data['mean_score'] = (float) $data['mean_score'];
        }

        if (null === $data || !\is_array($data)) {
            return $userStatisticsDataManga;
        }

        if (\array_key_exists('days_read', $data)) {
            $userStatisticsDataManga->setDaysRead($data['days_read']);
        }

        if (\array_key_exists('mean_score', $data)) {
            $userStatisticsDataManga->setMeanScore($data['mean_score']);
        }

        if (\array_key_exists('reading', $data)) {
            $userStatisticsDataManga->setReading($data['reading']);
        }

        if (\array_key_exists('completed', $data)) {
            $userStatisticsDataManga->setCompleted($data['completed']);
        }

        if (\array_key_exists('on_hold', $data)) {
            $userStatisticsDataManga->setOnHold($data['on_hold']);
        }

        if (\array_key_exists('dropped', $data)) {
            $userStatisticsDataManga->setDropped($data['dropped']);
        }

        if (\array_key_exists('plan_to_read', $data)) {
            $userStatisticsDataManga->setPlanToRead($data['plan_to_read']);
        }

        if (\array_key_exists('total_entries', $data)) {
            $userStatisticsDataManga->setTotalEntries($data['total_entries']);
        }

        if (\array_key_exists('reread', $data)) {
            $userStatisticsDataManga->setReread($data['reread']);
        }

        if (\array_key_exists('chapters_read', $data)) {
            $userStatisticsDataManga->setChaptersRead($data['chapters_read']);
        }

        if (\array_key_exists('volumes_read', $data)) {
            $userStatisticsDataManga->setVolumesRead($data['volumes_read']);
        }

        return $userStatisticsDataManga;
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
