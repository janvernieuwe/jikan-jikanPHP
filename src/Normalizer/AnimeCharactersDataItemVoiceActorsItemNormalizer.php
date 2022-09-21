<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemVoiceActorsItem;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemVoiceActorsItemPerson;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeCharactersDataItemVoiceActorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeCharactersDataItemVoiceActorsItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeCharactersDataItemVoiceActorsItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeCharactersDataItemVoiceActorsItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeCharactersDataItemVoiceActorsItem = new AnimeCharactersDataItemVoiceActorsItem();
        if (null === $data || !\is_array($data)) {
            return $animeCharactersDataItemVoiceActorsItem;
        }

        if (\array_key_exists('person', $data)) {
            $animeCharactersDataItemVoiceActorsItem->setPerson($this->denormalizer->denormalize($data['person'], AnimeCharactersDataItemVoiceActorsItemPerson::class, 'json', $context));
        }

        if (\array_key_exists('language', $data)) {
            $animeCharactersDataItemVoiceActorsItem->setLanguage($data['language']);
        }

        return $animeCharactersDataItemVoiceActorsItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getPerson()) {
            $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }

        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }

        return $data;
    }
}
