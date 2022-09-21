<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterVoiceActorsDataItem;
use Jikan\JikanPHP\Model\PersonMeta;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CharacterVoiceActorsDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return CharacterVoiceActorsDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof CharacterVoiceActorsDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|CharacterVoiceActorsDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $characterVoiceActorsDataItem = new CharacterVoiceActorsDataItem();
        if (null === $data || !\is_array($data)) {
            return $characterVoiceActorsDataItem;
        }

        if (\array_key_exists('language', $data)) {
            $characterVoiceActorsDataItem->setLanguage($data['language']);
        }

        if (\array_key_exists('person', $data)) {
            $characterVoiceActorsDataItem->setPerson($this->denormalizer->denormalize($data['person'], PersonMeta::class, 'json', $context));
        }

        return $characterVoiceActorsDataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }

        if (null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }

        return $data;
    }
}
