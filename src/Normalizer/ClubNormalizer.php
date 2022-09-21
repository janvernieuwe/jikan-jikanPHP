<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Club;
use Jikan\JikanPHP\Model\CommonImages;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ClubNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Club::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Club;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Club
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $club = new Club();
        if (null === $data || !\is_array($data)) {
            return $club;
        }

        if (\array_key_exists('mal_id', $data)) {
            $club->setMalId($data['mal_id']);
        }

        if (\array_key_exists('name', $data)) {
            $club->setName($data['name']);
        }

        if (\array_key_exists('url', $data)) {
            $club->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $club->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
        }

        if (\array_key_exists('members', $data)) {
            $club->setMembers($data['members']);
        }

        if (\array_key_exists('category', $data)) {
            $club->setCategory($data['category']);
        }

        if (\array_key_exists('created', $data)) {
            $club->setCreated($data['created']);
        }

        if (\array_key_exists('access', $data)) {
            $club->setAccess($data['access']);
        }

        return $club;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }

        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getMembers()) {
            $data['members'] = $object->getMembers();
        }

        if (null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }

        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }

        if (null !== $object->getAccess()) {
            $data['access'] = $object->getAccess();
        }

        return $data;
    }
}
