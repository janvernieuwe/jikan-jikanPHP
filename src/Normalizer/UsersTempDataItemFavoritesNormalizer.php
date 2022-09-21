<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\EntryMeta;
use Jikan\JikanPHP\Model\UsersTempDataItemFavorites;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsersTempDataItemFavoritesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UsersTempDataItemFavorites::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UsersTempDataItemFavorites;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UsersTempDataItemFavorites
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $usersTempDataItemFavorites = new UsersTempDataItemFavorites();
        if (null === $data || !\is_array($data)) {
            return $usersTempDataItemFavorites;
        }

        if (\array_key_exists('anime', $data)) {
            $values = [];
            foreach ($data['anime'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, EntryMeta::class, 'json', $context);
            }

            $usersTempDataItemFavorites->setAnime($values);
        }

        if (\array_key_exists('manga', $data)) {
            $values_1 = [];
            foreach ($data['manga'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, EntryMeta::class, 'json', $context);
            }

            $usersTempDataItemFavorites->setManga($values_1);
        }

        if (\array_key_exists('characters', $data)) {
            $values_2 = [];
            foreach ($data['characters'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, EntryMeta::class, 'json', $context);
            }

            $usersTempDataItemFavorites->setCharacters($values_2);
        }

        if (\array_key_exists('people', $data)) {
            $values_3 = [];
            foreach ($data['people'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, EntryMeta::class, 'json', $context);
            }

            $usersTempDataItemFavorites->setPeople($values_3);
        }

        return $usersTempDataItemFavorites;
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

        if (null !== $object->getPeople()) {
            $values_3 = [];
            foreach ($object->getPeople() as $person) {
                $values_3[] = $this->normalizer->normalize($person, 'json', $context);
            }

            $data['people'] = $values_3;
        }

        return $data;
    }
}
