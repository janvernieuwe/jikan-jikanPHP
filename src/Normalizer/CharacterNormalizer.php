<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Character;
use Jikan\JikanPHP\Model\CharacterImages;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CharacterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Character::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Character;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Character
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $character = new Character();
        if (null === $data || !\is_array($data)) {
            return $character;
        }

        if (\array_key_exists('mal_id', $data)) {
            $character->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $character->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $character->setImages($this->denormalizer->denormalize($data['images'], CharacterImages::class, 'json', $context));
        }

        if (\array_key_exists('name', $data)) {
            $character->setName($data['name']);
        }

        if (\array_key_exists('name_kanji', $data) && null !== $data['name_kanji']) {
            $character->setNameKanji($data['name_kanji']);
        } elseif (\array_key_exists('name_kanji', $data) && null === $data['name_kanji']) {
            $character->setNameKanji(null);
        }

        if (\array_key_exists('nicknames', $data)) {
            $values = [];
            foreach ($data['nicknames'] as $value) {
                $values[] = $value;
            }

            $character->setNicknames($values);
        }

        if (\array_key_exists('favorites', $data)) {
            $character->setFavorites($data['favorites']);
        }

        if (\array_key_exists('about', $data) && null !== $data['about']) {
            $character->setAbout($data['about']);
        } elseif (\array_key_exists('about', $data) && null === $data['about']) {
            $character->setAbout(null);
        }

        return $character;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }

        if (null !== $object->getNameKanji()) {
            $data['name_kanji'] = $object->getNameKanji();
        }

        if (null !== $object->getNicknames()) {
            $values = [];
            foreach ($object->getNicknames() as $nickname) {
                $values[] = $nickname;
            }

            $data['nicknames'] = $values;
        }

        if (null !== $object->getFavorites()) {
            $data['favorites'] = $object->getFavorites();
        }

        if (null !== $object->getAbout()) {
            $data['about'] = $object->getAbout();
        }

        return $data;
    }
}
