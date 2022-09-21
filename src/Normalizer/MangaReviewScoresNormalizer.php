<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaReviewScores;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MangaReviewScoresNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return MangaReviewScores::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaReviewScores;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaReviewScores
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaReviewScores = new MangaReviewScores();
        if (null === $data || !\is_array($data)) {
            return $mangaReviewScores;
        }

        if (\array_key_exists('overall', $data)) {
            $mangaReviewScores->setOverall($data['overall']);
        }

        if (\array_key_exists('story', $data)) {
            $mangaReviewScores->setStory($data['story']);
        }

        if (\array_key_exists('art', $data)) {
            $mangaReviewScores->setArt($data['art']);
        }

        if (\array_key_exists('character', $data)) {
            $mangaReviewScores->setCharacter($data['character']);
        }

        if (\array_key_exists('enjoyment', $data)) {
            $mangaReviewScores->setEnjoyment($data['enjoyment']);
        }

        return $mangaReviewScores;
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

        if (null !== $object->getArt()) {
            $data['art'] = $object->getArt();
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
