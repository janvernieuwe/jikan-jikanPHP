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

class ClubRelationsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\ClubRelationsData' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\ClubRelationsData' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\ClubRelationsData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('anime', $data)) {
            $values = [];
            foreach ($data['anime'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setAnime($values);
        }
        if (\array_key_exists('manga', $data)) {
            $values_1 = [];
            foreach ($data['manga'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setManga($values_1);
        }
        if (\array_key_exists('characters', $data)) {
            $values_2 = [];
            foreach ($data['characters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setCharacters($values_2);
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
        if (null !== $object->getAnime()) {
            $values = [];
            foreach ($object->getAnime() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['anime'] = $values;
        }
        if (null !== $object->getManga()) {
            $values_1 = [];
            foreach ($object->getManga() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['manga'] = $values_1;
        }
        if (null !== $object->getCharacters()) {
            $values_2 = [];
            foreach ($object->getCharacters() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['characters'] = $values_2;
        }

        return $data;
    }
}
