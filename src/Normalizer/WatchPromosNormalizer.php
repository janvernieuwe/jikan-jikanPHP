<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\PaginationPagination;
use Jikan\JikanPHP\Model\WatchPromos;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class WatchPromosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return WatchPromos::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof WatchPromos;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|WatchPromos
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $watchPromos = new WatchPromos();
        if (null === $data || !\is_array($data)) {
            return $watchPromos;
        }

        if (\array_key_exists('pagination', $data)) {
            $watchPromos->setPagination($this->denormalizer->denormalize($data['pagination'], PaginationPagination::class, 'json', $context));
        }

        if (\array_key_exists('title', $data)) {
            $watchPromos->setTitle($data['title']);
        }

        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $value;
            }

            $watchPromos->setData($values);
        }

        return $watchPromos;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getPagination()) {
            $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
        }

        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        if (null !== $object->getData()) {
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $value;
            }

            $data['data'] = $values;
        }

        return $data;
    }
}
