<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CommonImages;
use Jikan\JikanPHP\Model\Producer;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProducerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Producer::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Producer;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Producer
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $producer = new Producer();
        if (null === $data || !\is_array($data)) {
            return $producer;
        }

        if (\array_key_exists('mal_id', $data)) {
            $producer->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $producer->setUrl($data['url']);
        }

        if (\array_key_exists('titles', $data)) {
            $values = [];
            foreach ($data['titles'] as $value) {
                $values[] = $value;
            }

            $producer->setTitles($values);
        }

        if (\array_key_exists('images', $data)) {
            $producer->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
        }

        if (\array_key_exists('favorites', $data)) {
            $producer->setFavorites($data['favorites']);
        }

        if (\array_key_exists('count', $data)) {
            $producer->setCount($data['count']);
        }

        if (\array_key_exists('established', $data) && null !== $data['established']) {
            $producer->setEstablished($data['established']);
        } elseif (\array_key_exists('established', $data) && null === $data['established']) {
            $producer->setEstablished(null);
        }

        if (\array_key_exists('about', $data) && null !== $data['about']) {
            $producer->setAbout($data['about']);
        } elseif (\array_key_exists('about', $data) && null === $data['about']) {
            $producer->setAbout(null);
        }

        return $producer;
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

        if (null !== $object->getTitles()) {
            $values = [];
            foreach ($object->getTitles() as $title) {
                $values[] = $title;
            }

            $data['titles'] = $values;
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getFavorites()) {
            $data['favorites'] = $object->getFavorites();
        }

        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }

        if (null !== $object->getEstablished()) {
            $data['established'] = $object->getEstablished();
        }

        if (null !== $object->getAbout()) {
            $data['about'] = $object->getAbout();
        }

        return $data;
    }
}
