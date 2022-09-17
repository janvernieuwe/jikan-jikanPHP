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

class AnimeStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\AnimeStatisticsData' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\AnimeStatisticsData' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\AnimeStatisticsData();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('scores', $data)) {
            $values = [];
            foreach ($data['scores'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jikan\\JikanPHP\\Model\\AnimeStatisticsDataScoresItem', 'json', $context);
            }
            $object->setScores($values);
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
        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if (null !== $object->getScores()) {
            $values = [];
            foreach ($object->getScores() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['scores'] = $values;
        }

        return $data;
    }
}
