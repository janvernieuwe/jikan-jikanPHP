<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserStatisticsData;
use Jikan\JikanPHP\Model\UserStatisticsDataAnime;
use Jikan\JikanPHP\Model\UserStatisticsDataManga;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserStatisticsData::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserStatisticsData;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserStatisticsData
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userStatisticsData = new UserStatisticsData();
        if (null === $data || !\is_array($data)) {
            return $userStatisticsData;
        }

        if (\array_key_exists('anime', $data)) {
            $userStatisticsData->setAnime($this->denormalizer->denormalize($data['anime'], UserStatisticsDataAnime::class, 'json', $context));
        }

        if (\array_key_exists('manga', $data)) {
            $userStatisticsData->setManga($this->denormalizer->denormalize($data['manga'], UserStatisticsDataManga::class, 'json', $context));
        }

        return $userStatisticsData;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getAnime()) {
            $data['anime'] = $this->normalizer->normalize($object->getAnime(), 'json', $context);
        }

        if (null !== $object->getManga()) {
            $data['manga'] = $this->normalizer->normalize($object->getManga(), 'json', $context);
        }

        return $data;
    }
}
