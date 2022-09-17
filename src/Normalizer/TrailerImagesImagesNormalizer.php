<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TrailerImagesImagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\TrailerImagesImages' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\TrailerImagesImages' === get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param null|mixed $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jikan\JikanPHP\Model\TrailerImagesImages();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('image_url', $data) && null !== $data['image_url']) {
            $object->setImageUrl($data['image_url']);
        } elseif (\array_key_exists('image_url', $data) && null === $data['image_url']) {
            $object->setImageUrl(null);
        }
        if (\array_key_exists('small_image_url', $data) && null !== $data['small_image_url']) {
            $object->setSmallImageUrl($data['small_image_url']);
        } elseif (\array_key_exists('small_image_url', $data) && null === $data['small_image_url']) {
            $object->setSmallImageUrl(null);
        }
        if (\array_key_exists('medium_image_url', $data) && null !== $data['medium_image_url']) {
            $object->setMediumImageUrl($data['medium_image_url']);
        } elseif (\array_key_exists('medium_image_url', $data) && null === $data['medium_image_url']) {
            $object->setMediumImageUrl(null);
        }
        if (\array_key_exists('large_image_url', $data) && null !== $data['large_image_url']) {
            $object->setLargeImageUrl($data['large_image_url']);
        } elseif (\array_key_exists('large_image_url', $data) && null === $data['large_image_url']) {
            $object->setLargeImageUrl(null);
        }
        if (\array_key_exists('maximum_image_url', $data) && null !== $data['maximum_image_url']) {
            $object->setMaximumImageUrl($data['maximum_image_url']);
        } elseif (\array_key_exists('maximum_image_url', $data) && null === $data['maximum_image_url']) {
            $object->setMaximumImageUrl(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getImageUrl()) {
            $data['image_url'] = $object->getImageUrl();
        }
        if (null !== $object->getSmallImageUrl()) {
            $data['small_image_url'] = $object->getSmallImageUrl();
        }
        if (null !== $object->getMediumImageUrl()) {
            $data['medium_image_url'] = $object->getMediumImageUrl();
        }
        if (null !== $object->getLargeImageUrl()) {
            $data['large_image_url'] = $object->getLargeImageUrl();
        }
        if (null !== $object->getMaximumImageUrl()) {
            $data['maximum_image_url'] = $object->getMaximumImageUrl();
        }

        return $data;
    }
}
