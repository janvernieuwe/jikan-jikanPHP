<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeCharactersDataItem;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemCharacter;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemVoiceActorsItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeCharactersDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeCharactersDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeCharactersDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeCharactersDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeCharactersDataItem = new AnimeCharactersDataItem();
        if (null === $data || !\is_array($data)) {
            return $animeCharactersDataItem;
        }

        if (\array_key_exists('character', $data)) {
            $animeCharactersDataItem->setCharacter($this->denormalizer->denormalize($data['character'], AnimeCharactersDataItemCharacter::class, 'json', $context));
        }

        if (\array_key_exists('role', $data)) {
            $animeCharactersDataItem->setRole($data['role']);
        }

        if (\array_key_exists('voice_actors', $data)) {
            $values = [];
            foreach ($data['voice_actors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, AnimeCharactersDataItemVoiceActorsItem::class, 'json', $context);
            }

            $animeCharactersDataItem->setVoiceActors($values);
        }

        return $animeCharactersDataItem;
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

        if (null !== $object->getVoiceActors()) {
            $values = [];
            foreach ($object->getVoiceActors() as $voiceActor) {
                $values[] = $this->normalizer->normalize($voiceActor, 'json', $context);
            }

            $data['voice_actors'] = $values;
        }

        return $data;
    }
}
