<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Model\CharacterMeta;
use Jikan\JikanPHP\Model\PersonVoiceActingRolesDataItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonVoiceActingRolesDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return PersonVoiceActingRolesDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof PersonVoiceActingRolesDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|PersonVoiceActingRolesDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $personVoiceActingRolesDataItem = new PersonVoiceActingRolesDataItem();
        if (null === $data || !\is_array($data)) {
            return $personVoiceActingRolesDataItem;
        }

        if (\array_key_exists('role', $data)) {
            $personVoiceActingRolesDataItem->setRole($data['role']);
        }

        if (\array_key_exists('anime', $data)) {
            $personVoiceActingRolesDataItem->setAnime($this->denormalizer->denormalize($data['anime'], AnimeMeta::class, 'json', $context));
        }

        if (\array_key_exists('character', $data)) {
            $personVoiceActingRolesDataItem->setCharacter($this->denormalizer->denormalize($data['character'], CharacterMeta::class, 'json', $context));
        }

        return $personVoiceActingRolesDataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getRole()) {
            $data['role'] = $object->getRole();
        }

        if (null !== $object->getAnime()) {
            $data['anime'] = $this->normalizer->normalize($object->getAnime(), 'json', $context);
        }

        if (null !== $object->getCharacter()) {
            $data['character'] = $this->normalizer->normalize($object->getCharacter(), 'json', $context);
        }

        return $data;
    }
}
