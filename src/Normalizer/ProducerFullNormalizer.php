<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CommonImages;
use Jikan\JikanPHP\Model\ProducerFull;
use Jikan\JikanPHP\Model\ProducerFullExternalItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProducerFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return ProducerFull::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof ProducerFull;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|ProducerFull
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $producerFull = new ProducerFull();
        if (null === $data || !\is_array($data)) {
            return $producerFull;
        }

        if (\array_key_exists('mal_id', $data)) {
            $producerFull->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $producerFull->setUrl($data['url']);
        }

        if (\array_key_exists('titles', $data)) {
            $values = [];
            foreach ($data['titles'] as $value) {
                $values[] = $value;
            }

            $producerFull->setTitles($values);
        }

        if (\array_key_exists('images', $data)) {
            $producerFull->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
        }

        if (\array_key_exists('favorites', $data)) {
            $producerFull->setFavorites($data['favorites']);
        }

        if (\array_key_exists('count', $data)) {
            $producerFull->setCount($data['count']);
        }

        if (\array_key_exists('established', $data) && null !== $data['established']) {
            $producerFull->setEstablished($data['established']);
        } elseif (\array_key_exists('established', $data) && null === $data['established']) {
            $producerFull->setEstablished(null);
        }

        if (\array_key_exists('about', $data) && null !== $data['about']) {
            $producerFull->setAbout($data['about']);
        } elseif (\array_key_exists('about', $data) && null === $data['about']) {
            $producerFull->setAbout(null);
        }

        if (\array_key_exists('external', $data)) {
            $values_1 = [];
            foreach ($data['external'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, ProducerFullExternalItem::class, 'json', $context);
            }

            $producerFull->setExternal($values_1);
        }

        return $producerFull;
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

        if (null !== $object->getExternal()) {
            $values_1 = [];
            foreach ($object->getExternal() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }

            $data['external'] = $values_1;
        }

        return $data;
    }
}
