<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterMeta;
use Jikan\JikanPHP\Model\MangaCharactersDataItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MangaCharactersDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return MangaCharactersDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaCharactersDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaCharactersDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaCharactersDataItem = new MangaCharactersDataItem();
        if (null === $data || !\is_array($data)) {
            return $mangaCharactersDataItem;
        }

        if (\array_key_exists('character', $data)) {
            $mangaCharactersDataItem->setCharacter($this->denormalizer->denormalize($data['character'], CharacterMeta::class, 'json', $context));
        }

        if (\array_key_exists('role', $data)) {
            $mangaCharactersDataItem->setRole($data['role']);
        }

        return $mangaCharactersDataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getCharacter()) {
            $data['character'] = $this->normalizer->normalize($object->getCharacter(), 'json', $context);
        }

        if (null !== $object->getRole()) {
            $data['role'] = $object->getRole();
        }

        return $data;
    }
}
