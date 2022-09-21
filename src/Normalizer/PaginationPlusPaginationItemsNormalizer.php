<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\PaginationPlusPaginationItems;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PaginationPlusPaginationItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return PaginationPlusPaginationItems::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof PaginationPlusPaginationItems;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|PaginationPlusPaginationItems
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $paginationPlusPaginationItems = new PaginationPlusPaginationItems();
        if (null === $data || !\is_array($data)) {
            return $paginationPlusPaginationItems;
        }

        if (\array_key_exists('count', $data)) {
            $paginationPlusPaginationItems->setCount($data['count']);
        }

        if (\array_key_exists('total', $data)) {
            $paginationPlusPaginationItems->setTotal($data['total']);
        }

        if (\array_key_exists('per_page', $data)) {
            $paginationPlusPaginationItems->setPerPage($data['per_page']);
        }

        return $paginationPlusPaginationItems;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }

        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }

        if (null !== $object->getPerPage()) {
            $data['per_page'] = $object->getPerPage();
        }

        return $data;
    }
}
