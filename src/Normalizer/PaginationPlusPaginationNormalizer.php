<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\PaginationPlusPagination;
use Jikan\JikanPHP\Model\PaginationPlusPaginationItems;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PaginationPlusPaginationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return PaginationPlusPagination::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof PaginationPlusPagination;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|PaginationPlusPagination
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $paginationPlusPagination = new PaginationPlusPagination();
        if (null === $data || !\is_array($data)) {
            return $paginationPlusPagination;
        }

        if (\array_key_exists('last_visible_page', $data)) {
            $paginationPlusPagination->setLastVisiblePage($data['last_visible_page']);
        }

        if (\array_key_exists('has_next_page', $data)) {
            $paginationPlusPagination->setHasNextPage($data['has_next_page']);
        }

        if (\array_key_exists('items', $data)) {
            $paginationPlusPagination->setItems($this->denormalizer->denormalize($data['items'], PaginationPlusPaginationItems::class, 'json', $context));
        }

        return $paginationPlusPagination;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getLastVisiblePage()) {
            $data['last_visible_page'] = $object->getLastVisiblePage();
        }

        if (null !== $object->getHasNextPage()) {
            $data['has_next_page'] = $object->getHasNextPage();
        }

        if (null !== $object->getItems()) {
            $data['items'] = $this->normalizer->normalize($object->getItems(), 'json', $context);
        }

        return $data;
    }
}
