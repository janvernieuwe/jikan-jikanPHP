<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeStatisticsDataScoresItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeStatisticsDataScoresItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeStatisticsDataScoresItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeStatisticsDataScoresItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeStatisticsDataScoresItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeStatisticsDataScoresItem = new AnimeStatisticsDataScoresItem();
        if (\array_key_exists('percentage', $data) && \is_int($data['percentage'])) {
            $data['percentage'] = (float) $data['percentage'];
        }

        if (null === $data || !\is_array($data)) {
            return $animeStatisticsDataScoresItem;
        }

        if (\array_key_exists('score', $data)) {
            $animeStatisticsDataScoresItem->setScore($data['score']);
        }

        if (\array_key_exists('votes', $data)) {
            $animeStatisticsDataScoresItem->setVotes($data['votes']);
        }

        if (\array_key_exists('percentage', $data)) {
            $animeStatisticsDataScoresItem->setPercentage($data['percentage']);
        }

        return $animeStatisticsDataScoresItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getScore()) {
            $data['score'] = $object->getScore();
        }

        if (null !== $object->getVotes()) {
            $data['votes'] = $object->getVotes();
        }

        if (null !== $object->getPercentage()) {
            $data['percentage'] = $object->getPercentage();
        }

        return $data;
    }
}
