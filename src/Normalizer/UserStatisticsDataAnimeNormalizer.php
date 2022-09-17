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

class UserStatisticsDataAnimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\UserStatisticsDataAnime' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\UserStatisticsDataAnime' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\UserStatisticsDataAnime();
        if (\array_key_exists('days_watched', $data) && \is_int($data['days_watched'])) {
            $data['days_watched'] = (float) $data['days_watched'];
        }
        if (\array_key_exists('mean_score', $data) && \is_int($data['mean_score'])) {
            $data['mean_score'] = (float) $data['mean_score'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('days_watched', $data)) {
            $object->setDaysWatched($data['days_watched']);
        }
        if (\array_key_exists('mean_score', $data)) {
            $object->setMeanScore($data['mean_score']);
        }
        if (\array_key_exists('watching', $data)) {
            $object->setWatching($data['watching']);
        }
        if (\array_key_exists('completed', $data)) {
            $object->setCompleted($data['completed']);
        }
        if (\array_key_exists('on_hold', $data)) {
            $object->setOnHold($data['on_hold']);
        }
        if (\array_key_exists('dropped', $data)) {
            $object->setDropped($data['dropped']);
        }
        if (\array_key_exists('plan_to_watch', $data)) {
            $object->setPlanToWatch($data['plan_to_watch']);
        }
        if (\array_key_exists('total_entries', $data)) {
            $object->setTotalEntries($data['total_entries']);
        }
        if (\array_key_exists('rewatched', $data)) {
            $object->setRewatched($data['rewatched']);
        }
        if (\array_key_exists('episodes_watched', $data)) {
            $object->setEpisodesWatched($data['episodes_watched']);
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
        if (null !== $object->getDaysWatched()) {
            $data['days_watched'] = $object->getDaysWatched();
        }
        if (null !== $object->getMeanScore()) {
            $data['mean_score'] = $object->getMeanScore();
        }
        if (null !== $object->getWatching()) {
            $data['watching'] = $object->getWatching();
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
        if (null !== $object->getPlanToWatch()) {
            $data['plan_to_watch'] = $object->getPlanToWatch();
        }
        if (null !== $object->getTotalEntries()) {
            $data['total_entries'] = $object->getTotalEntries();
        }
        if (null !== $object->getRewatched()) {
            $data['rewatched'] = $object->getRewatched();
        }
        if (null !== $object->getEpisodesWatched()) {
            $data['episodes_watched'] = $object->getEpisodesWatched();
        }

        return $data;
    }
}
