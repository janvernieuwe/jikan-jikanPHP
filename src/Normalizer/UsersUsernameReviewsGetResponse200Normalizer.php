<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UsersUsernameReviewsGetResponse200;
use Jikan\JikanPHP\Model\UsersUsernameReviewsGetResponse200Data;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsersUsernameReviewsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UsersUsernameReviewsGetResponse200::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UsersUsernameReviewsGetResponse200;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UsersUsernameReviewsGetResponse200
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $usersUsernameReviewsGetResponse200 = new UsersUsernameReviewsGetResponse200();
        if (null === $data || !\is_array($data)) {
            return $usersUsernameReviewsGetResponse200;
        }

        if (\array_key_exists('data', $data)) {
            $usersUsernameReviewsGetResponse200->setData($this->denormalizer->denormalize($data['data'], UsersUsernameReviewsGetResponse200Data::class, 'json', $context));
        }

        return $usersUsernameReviewsGetResponse200;
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
