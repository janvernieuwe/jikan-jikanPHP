<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterMangaDataItem;
use Jikan\JikanPHP\Model\MangaMeta;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CharacterMangaDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return CharacterMangaDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof CharacterMangaDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|CharacterMangaDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $characterMangaDataItem = new CharacterMangaDataItem();
        if (null === $data || !\is_array($data)) {
            return $characterMangaDataItem;
        }

        if (\array_key_exists('role', $data)) {
            $characterMangaDataItem->setRole($data['role']);
        }

        if (\array_key_exists('manga', $data)) {
            $characterMangaDataItem->setManga($this->denormalizer->denormalize($data['manga'], MangaMeta::class, 'json', $context));
        }

        return $characterMangaDataItem;
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

        if (null !== $object->getManga()) {
            $data['manga'] = $this->normalizer->normalize($object->getManga(), 'json', $context);
        }

        return $data;
    }
}
