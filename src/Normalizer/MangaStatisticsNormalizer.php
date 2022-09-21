<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaStatistics;
use Jikan\JikanPHP\Model\MangaStatisticsData;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MangaStatisticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return MangaStatistics::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaStatistics;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaStatistics
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaStatistics = new MangaStatistics();
        if (null === $data || !\is_array($data)) {
            return $mangaStatistics;
        }

        if (\array_key_exists('data', $data)) {
            $mangaStatistics->setData($this->denormalizer->denormalize($data['data'], MangaStatisticsData::class, 'json', $context));
        }

        return $mangaStatistics;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getData()) {
            $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
        }

        return $data;
    }
}
