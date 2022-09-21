<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\ClubRelationsData;
use Jikan\JikanPHP\Model\MalUrl;
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
        return ClubRelationsData::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof ClubRelationsData;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|ClubRelationsData
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $clubRelationsData = new ClubRelationsData();
        if (null === $data || !\is_array($data)) {
            return $clubRelationsData;
        }

        if (\array_key_exists('anime', $data)) {
            $values = [];
            foreach ($data['anime'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, MalUrl::class, 'json', $context);
            }

            $clubRelationsData->setAnime($values);
        }

        if (\array_key_exists('manga', $data)) {
            $values_1 = [];
            foreach ($data['manga'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, MalUrl::class, 'json', $context);
            }

            $clubRelationsData->setManga($values_1);
        }

        if (\array_key_exists('characters', $data)) {
            $values_2 = [];
            foreach ($data['characters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, MalUrl::class, 'json', $context);
            }

            $clubRelationsData->setCharacters($values_2);
        }

        return $clubRelationsData;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
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
            foreach ($object->getCharacters() as $character) {
                $values_2[] = $this->normalizer->normalize($character, 'json', $context);
            }

            $data['characters'] = $values_2;
        }

        return $data;
    }
}
