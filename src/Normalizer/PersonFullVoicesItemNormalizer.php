<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Model\CharacterMeta;
use Jikan\JikanPHP\Model\PersonFullVoicesItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonFullVoicesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return PersonFullVoicesItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof PersonFullVoicesItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|PersonFullVoicesItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $personFullVoicesItem = new PersonFullVoicesItem();
        if (null === $data || !\is_array($data)) {
            return $personFullVoicesItem;
        }

        if (\array_key_exists('role', $data)) {
            $personFullVoicesItem->setRole($data['role']);
        }

        if (\array_key_exists('anime', $data)) {
            $personFullVoicesItem->setAnime($this->denormalizer->denormalize($data['anime'], AnimeMeta::class, 'json', $context));
        }

        if (\array_key_exists('character', $data)) {
            $personFullVoicesItem->setCharacter($this->denormalizer->denormalize($data['character'], CharacterMeta::class, 'json', $context));
        }

        return $personFullVoicesItem;
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
