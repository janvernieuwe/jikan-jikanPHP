<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeStaffDataItem;
use Jikan\JikanPHP\Model\AnimeStaffDataItemPerson;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeStaffDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeStaffDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeStaffDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeStaffDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeStaffDataItem = new AnimeStaffDataItem();
        if (null === $data || !\is_array($data)) {
            return $animeStaffDataItem;
        }

        if (\array_key_exists('person', $data)) {
            $animeStaffDataItem->setPerson($this->denormalizer->denormalize($data['person'], AnimeStaffDataItemPerson::class, 'json', $context));
        }

        if (\array_key_exists('positions', $data)) {
            $values = [];
            foreach ($data['positions'] as $value) {
                $values[] = $value;
            }

            $animeStaffDataItem->setPositions($values);
        }

        return $animeStaffDataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }

        if (null !== $object->getPositions()) {
            $values = [];
            foreach ($object->getPositions() as $position) {
                $values[] = $position;
            }

            $data['positions'] = $values;
        }

        return $data;
    }
}
