<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\TrailerImagesImages;
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
        return TrailerImagesImages::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof TrailerImagesImages;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|TrailerImagesImages
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $trailerImagesImages = new TrailerImagesImages();
        if (null === $data || !\is_array($data)) {
            return $trailerImagesImages;
        }

        if (\array_key_exists('image_url', $data) && null !== $data['image_url']) {
            $trailerImagesImages->setImageUrl($data['image_url']);
        } elseif (\array_key_exists('image_url', $data) && null === $data['image_url']) {
            $trailerImagesImages->setImageUrl(null);
        }

        if (\array_key_exists('small_image_url', $data) && null !== $data['small_image_url']) {
            $trailerImagesImages->setSmallImageUrl($data['small_image_url']);
        } elseif (\array_key_exists('small_image_url', $data) && null === $data['small_image_url']) {
            $trailerImagesImages->setSmallImageUrl(null);
        }

        if (\array_key_exists('medium_image_url', $data) && null !== $data['medium_image_url']) {
            $trailerImagesImages->setMediumImageUrl($data['medium_image_url']);
        } elseif (\array_key_exists('medium_image_url', $data) && null === $data['medium_image_url']) {
            $trailerImagesImages->setMediumImageUrl(null);
        }

        if (\array_key_exists('large_image_url', $data) && null !== $data['large_image_url']) {
            $trailerImagesImages->setLargeImageUrl($data['large_image_url']);
        } elseif (\array_key_exists('large_image_url', $data) && null === $data['large_image_url']) {
            $trailerImagesImages->setLargeImageUrl(null);
        }

        if (\array_key_exists('maximum_image_url', $data) && null !== $data['maximum_image_url']) {
            $trailerImagesImages->setMaximumImageUrl($data['maximum_image_url']);
        } elseif (\array_key_exists('maximum_image_url', $data) && null === $data['maximum_image_url']) {
            $trailerImagesImages->setMaximumImageUrl(null);
        }

        return $trailerImagesImages;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
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
