<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Trailer;
use Jikan\JikanPHP\Model\TrailerImagesImages;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TrailerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Trailer::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Trailer;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Trailer
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $trailer = new Trailer();
        if (null === $data || !\is_array($data)) {
            return $trailer;
        }

        if (\array_key_exists('youtube_id', $data) && null !== $data['youtube_id']) {
            $trailer->setYoutubeId($data['youtube_id']);
        } elseif (\array_key_exists('youtube_id', $data) && null === $data['youtube_id']) {
            $trailer->setYoutubeId(null);
        }

        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $trailer->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && null === $data['url']) {
            $trailer->setUrl(null);
        }

        if (\array_key_exists('embed_url', $data) && null !== $data['embed_url']) {
            $trailer->setEmbedUrl($data['embed_url']);
        } elseif (\array_key_exists('embed_url', $data) && null === $data['embed_url']) {
            $trailer->setEmbedUrl(null);
        }

        if (\array_key_exists('images', $data)) {
            $trailer->setImages($this->denormalizer->denormalize($data['images'], TrailerImagesImages::class, 'json', $context));
        }

        return $trailer;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getYoutubeId()) {
            $data['youtube_id'] = $object->getYoutubeId();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getEmbedUrl()) {
            $data['embed_url'] = $object->getEmbedUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        return $data;
    }
}
