<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeImages;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeMeta::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeMeta;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeMeta
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeMeta = new AnimeMeta();
        if (null === $data || !\is_array($data)) {
            return $animeMeta;
        }

        if (\array_key_exists('mal_id', $data)) {
            $animeMeta->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $animeMeta->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $animeMeta->setImages($this->denormalizer->denormalize($data['images'], AnimeImages::class, 'json', $context));
        }

        if (\array_key_exists('title', $data)) {
            $animeMeta->setTitle($data['title']);
        }

        return $animeMeta;
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

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        return $data;
    }
}
