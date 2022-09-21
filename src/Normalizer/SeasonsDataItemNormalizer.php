<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\SeasonsDataItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SeasonsDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return SeasonsDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof SeasonsDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|SeasonsDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $seasonsDataItem = new SeasonsDataItem();
        if (null === $data || !\is_array($data)) {
            return $seasonsDataItem;
        }

        if (\array_key_exists('year', $data)) {
            $seasonsDataItem->setYear($data['year']);
        }

        if (\array_key_exists('seasons', $data)) {
            $values = [];
            foreach ($data['seasons'] as $value) {
                $values[] = $value;
            }

            $seasonsDataItem->setSeasons($values);
        }

        return $seasonsDataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getYear()) {
            $data['year'] = $object->getYear();
        }

        if (null !== $object->getSeasons()) {
            $values = [];
            foreach ($object->getSeasons() as $season) {
                $values[] = $season;
            }

            $data['seasons'] = $values;
        }

        return $data;
    }
}
