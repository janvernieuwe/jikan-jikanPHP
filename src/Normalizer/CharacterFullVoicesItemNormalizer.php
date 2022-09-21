<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterFullVoicesItem;
use Jikan\JikanPHP\Model\PersonMeta;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CharacterFullVoicesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return CharacterFullVoicesItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof CharacterFullVoicesItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|CharacterFullVoicesItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $characterFullVoicesItem = new CharacterFullVoicesItem();
        if (null === $data || !\is_array($data)) {
            return $characterFullVoicesItem;
        }

        if (\array_key_exists('language', $data)) {
            $characterFullVoicesItem->setLanguage($data['language']);
        }

        if (\array_key_exists('person', $data)) {
            $characterFullVoicesItem->setPerson($this->denormalizer->denormalize($data['person'], PersonMeta::class, 'json', $context));
        }

        return $characterFullVoicesItem;
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
