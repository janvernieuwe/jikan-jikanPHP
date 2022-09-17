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

class MangaStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\MangaStatisticsData' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\MangaStatisticsData' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\MangaStatisticsData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('reading', $data)) {
            $object->setReading($data['reading']);
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
        if (\array_key_exists('plan_to_read', $data)) {
            $object->setPlanToRead($data['plan_to_read']);
        }
        if (\array_key_exists('total', $data)) {
            $object->setTotal($data['total']);
        }
        if (\array_key_exists('scores', $data)) {
            $values = [];
            foreach ($data['scores'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jikan\\JikanPHP\\Model\\MangaStatisticsDataScoresItem', 'json', $context);
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
