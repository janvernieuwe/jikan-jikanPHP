<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaImagesWebp;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MangaImagesWebpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return MangaImagesWebp::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaImagesWebp;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaImagesWebp
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaImagesWebp = new MangaImagesWebp();
        if (null === $data || !\is_array($data)) {
            return $mangaImagesWebp;
        }

        if (\array_key_exists('image_url', $data) && null !== $data['image_url']) {
            $mangaImagesWebp->setImageUrl($data['image_url']);
        } elseif (\array_key_exists('image_url', $data) && null === $data['image_url']) {
            $mangaImagesWebp->setImageUrl(null);
        }

        if (\array_key_exists('small_image_url', $data) && null !== $data['small_image_url']) {
            $mangaImagesWebp->setSmallImageUrl($data['small_image_url']);
        } elseif (\array_key_exists('small_image_url', $data) && null === $data['small_image_url']) {
            $mangaImagesWebp->setSmallImageUrl(null);
        }

        if (\array_key_exists('large_image_url', $data) && null !== $data['large_image_url']) {
            $mangaImagesWebp->setLargeImageUrl($data['large_image_url']);
        } elseif (\array_key_exists('large_image_url', $data) && null === $data['large_image_url']) {
            $mangaImagesWebp->setLargeImageUrl(null);
        }

        return $mangaImagesWebp;
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

        if (null !== $object->getLargeImageUrl()) {
            $data['large_image_url'] = $object->getLargeImageUrl();
        }

        return $data;
    }
}
