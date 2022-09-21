<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\PeopleImages;
use Jikan\JikanPHP\Model\Person;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Person::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Person;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Person
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $person = new Person();
        if (null === $data || !\is_array($data)) {
            return $person;
        }

        if (\array_key_exists('mal_id', $data)) {
            $person->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $person->setUrl($data['url']);
        }

        if (\array_key_exists('website_url', $data) && null !== $data['website_url']) {
            $person->setWebsiteUrl($data['website_url']);
        } elseif (\array_key_exists('website_url', $data) && null === $data['website_url']) {
            $person->setWebsiteUrl(null);
        }

        if (\array_key_exists('images', $data)) {
            $person->setImages($this->denormalizer->denormalize($data['images'], PeopleImages::class, 'json', $context));
        }

        if (\array_key_exists('name', $data)) {
            $person->setName($data['name']);
        }

        if (\array_key_exists('given_name', $data) && null !== $data['given_name']) {
            $person->setGivenName($data['given_name']);
        } elseif (\array_key_exists('given_name', $data) && null === $data['given_name']) {
            $person->setGivenName(null);
        }

        if (\array_key_exists('family_name', $data) && null !== $data['family_name']) {
            $person->setFamilyName($data['family_name']);
        } elseif (\array_key_exists('family_name', $data) && null === $data['family_name']) {
            $person->setFamilyName(null);
        }

        if (\array_key_exists('alternate_names', $data)) {
            $values = [];
            foreach ($data['alternate_names'] as $value) {
                $values[] = $value;
            }

            $person->setAlternateNames($values);
        }

        if (\array_key_exists('birthday', $data) && null !== $data['birthday']) {
            $person->setBirthday($data['birthday']);
        } elseif (\array_key_exists('birthday', $data) && null === $data['birthday']) {
            $person->setBirthday(null);
        }

        if (\array_key_exists('favorites', $data)) {
            $person->setFavorites($data['favorites']);
        }

        if (\array_key_exists('about', $data) && null !== $data['about']) {
            $person->setAbout($data['about']);
        } elseif (\array_key_exists('about', $data) && null === $data['about']) {
            $person->setAbout(null);
        }

        return $person;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getWebsiteUrl()) {
            $data['website_url'] = $object->getWebsiteUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }

        if (null !== $object->getGivenName()) {
            $data['given_name'] = $object->getGivenName();
        }

        if (null !== $object->getFamilyName()) {
            $data['family_name'] = $object->getFamilyName();
        }

        if (null !== $object->getAlternateNames()) {
            $values = [];
            foreach ($object->getAlternateNames() as $alternateName) {
                $values[] = $alternateName;
            }

            $data['alternate_names'] = $values;
        }

        if (null !== $object->getBirthday()) {
            $data['birthday'] = $object->getBirthday();
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
