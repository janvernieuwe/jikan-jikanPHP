<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\ClubsIdMembersGetResponse200;
use Jikan\JikanPHP\Model\PaginationPagination;
use Jikan\JikanPHP\Model\UserImages;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ClubsIdMembersGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return ClubsIdMembersGetResponse200::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof ClubsIdMembersGetResponse200;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|ClubsIdMembersGetResponse200
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $clubsIdMembersGetResponse200 = new ClubsIdMembersGetResponse200();
        if (null === $data || !\is_array($data)) {
            return $clubsIdMembersGetResponse200;
        }

        if (\array_key_exists('pagination', $data)) {
            $clubsIdMembersGetResponse200->setPagination($this->denormalizer->denormalize($data['pagination'], PaginationPagination::class, 'json', $context));
        }

        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, UserImages::class, 'json', $context);
            }

            $clubsIdMembersGetResponse200->setData($values);
        }

        return $clubsIdMembersGetResponse200;
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

        if (null !== $object->getData()) {
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $data['data'] = $values;
        }

        return $data;
    }
}
