<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeReviewScoresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\AnimeReviewScores' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\AnimeReviewScores' === get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param null|mixed $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jikan\JikanPHP\Model\AnimeReviewScores();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('overall', $data)) {
            $object->setOverall($data['overall']);
        }
        if (\array_key_exists('story', $data)) {
            $object->setStory($data['story']);
        }
        if (\array_key_exists('animation', $data)) {
            $object->setAnimation($data['animation']);
        }
        if (\array_key_exists('sound', $data)) {
            $object->setSound($data['sound']);
        }
        if (\array_key_exists('character', $data)) {
            $object->setCharacter($data['character']);
        }
        if (\array_key_exists('enjoyment', $data)) {
            $object->setEnjoyment($data['enjoyment']);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getOverall()) {
            $data['overall'] = $object->getOverall();
        }
        if (null !== $object->getStory()) {
            $data['story'] = $object->getStory();
        }
        if (null !== $object->getAnimation()) {
            $data['animation'] = $object->getAnimation();
        }
        if (null !== $object->getSound()) {
            $data['sound'] = $object->getSound();
        }
        if (null !== $object->getCharacter()) {
            $data['character'] = $object->getCharacter();
        }
        if (null !== $object->getEnjoyment()) {
            $data['enjoyment'] = $object->getEnjoyment();
        }

        return $data;
    }
}
