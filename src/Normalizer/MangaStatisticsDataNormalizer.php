<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaStatisticsData;
use Jikan\JikanPHP\Model\MangaStatisticsDataScoresItem;
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
        return MangaStatisticsData::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaStatisticsData;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaStatisticsData
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaStatisticsData = new MangaStatisticsData();
        if (null === $data || !\is_array($data)) {
            return $mangaStatisticsData;
        }

        if (\array_key_exists('reading', $data)) {
            $mangaStatisticsData->setReading($data['reading']);
        }

        if (\array_key_exists('completed', $data)) {
            $mangaStatisticsData->setCompleted($data['completed']);
        }

        if (\array_key_exists('on_hold', $data)) {
            $mangaStatisticsData->setOnHold($data['on_hold']);
        }

        if (\array_key_exists('dropped', $data)) {
            $mangaStatisticsData->setDropped($data['dropped']);
        }

        if (\array_key_exists('plan_to_read', $data)) {
            $mangaStatisticsData->setPlanToRead($data['plan_to_read']);
        }

        if (\array_key_exists('total', $data)) {
            $mangaStatisticsData->setTotal($data['total']);
        }

        if (\array_key_exists('scores', $data)) {
            $values = [];
            foreach ($data['scores'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, MangaStatisticsDataScoresItem::class, 'json', $context);
            }

            $mangaStatisticsData->setScores($values);
        }

        return $mangaStatisticsData;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
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
            foreach ($object->getScores() as $score) {
                $values[] = $this->normalizer->normalize($score, 'json', $context);
            }

            $data['scores'] = $values;
        }

        return $data;
    }
}
