<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeReview;
use Jikan\JikanPHP\Model\AnimeReviewScores;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeReview::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeReview;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeReview
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeReview = new AnimeReview();
        if (null === $data || !\is_array($data)) {
            return $animeReview;
        }

        if (\array_key_exists('mal_id', $data)) {
            $animeReview->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $animeReview->setUrl($data['url']);
        }

        if (\array_key_exists('type', $data)) {
            $animeReview->setType($data['type']);
        }

        if (\array_key_exists('votes', $data)) {
            $animeReview->setVotes($data['votes']);
        }

        if (\array_key_exists('date', $data)) {
            $animeReview->setDate($data['date']);
        }

        if (\array_key_exists('review', $data)) {
            $animeReview->setReview($data['review']);
        }

        if (\array_key_exists('episodes_watched', $data)) {
            $animeReview->setEpisodesWatched($data['episodes_watched']);
        }

        if (\array_key_exists('scores', $data)) {
            $animeReview->setScores($this->denormalizer->denormalize($data['scores'], AnimeReviewScores::class, 'json', $context));
        }

        return $animeReview;
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

        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }

        if (null !== $object->getVotes()) {
            $data['votes'] = $object->getVotes();
        }

        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        if (null !== $object->getReview()) {
            $data['review'] = $object->getReview();
        }

        if (null !== $object->getEpisodesWatched()) {
            $data['episodes_watched'] = $object->getEpisodesWatched();
        }

        if (null !== $object->getScores()) {
            $data['scores'] = $this->normalizer->normalize($object->getScores(), 'json', $context);
        }

        return $data;
    }
}
