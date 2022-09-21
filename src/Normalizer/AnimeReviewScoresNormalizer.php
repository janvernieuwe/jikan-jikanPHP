<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeReviewScores;
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
        return AnimeReviewScores::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeReviewScores;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeReviewScores
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeReviewScores = new AnimeReviewScores();
        if (null === $data || !\is_array($data)) {
            return $animeReviewScores;
        }

        if (\array_key_exists('overall', $data)) {
            $animeReviewScores->setOverall($data['overall']);
        }

        if (\array_key_exists('story', $data)) {
            $animeReviewScores->setStory($data['story']);
        }

        if (\array_key_exists('animation', $data)) {
            $animeReviewScores->setAnimation($data['animation']);
        }

        if (\array_key_exists('sound', $data)) {
            $animeReviewScores->setSound($data['sound']);
        }

        if (\array_key_exists('character', $data)) {
            $animeReviewScores->setCharacter($data['character']);
        }

        if (\array_key_exists('enjoyment', $data)) {
            $animeReviewScores->setEnjoyment($data['enjoyment']);
        }

        return $animeReviewScores;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
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
