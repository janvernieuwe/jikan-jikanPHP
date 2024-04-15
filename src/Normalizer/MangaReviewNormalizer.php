<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\MangaReview;
use Jikan\JikanPHP\Model\MangaReviewReactions;
use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Jikan\JikanPHP\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class MangaReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return MangaReview::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof MangaReview;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new MangaReview();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }

            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }

            if (\array_key_exists('reactions', $data)) {
                $object->setReactions($this->denormalizer->denormalize($data['reactions'], MangaReviewReactions::class, 'json', $context));
                unset($data['reactions']);
            }

            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }

            if (\array_key_exists('review', $data)) {
                $object->setReview($data['review']);
                unset($data['review']);
            }

            if (\array_key_exists('score', $data)) {
                $object->setScore($data['score']);
                unset($data['score']);
            }

            if (\array_key_exists('tags', $data)) {
                $values = [];
                foreach ($data['tags'] as $value) {
                    $values[] = $value;
                }

                $object->setTags($values);
                unset($data['tags']);
            }

            if (\array_key_exists('is_spoiler', $data)) {
                $object->setIsSpoiler($data['is_spoiler']);
                unset($data['is_spoiler']);
            }

            if (\array_key_exists('is_preliminary', $data)) {
                $object->setIsPreliminary($data['is_preliminary']);
                unset($data['is_preliminary']);
            }

            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }

            if ($object->isInitialized('reactions') && null !== $object->getReactions()) {
                $data['reactions'] = $this->normalizer->normalize($object->getReactions(), 'json', $context);
            }

            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }

            if ($object->isInitialized('review') && null !== $object->getReview()) {
                $data['review'] = $object->getReview();
            }

            if ($object->isInitialized('score') && null !== $object->getScore()) {
                $data['score'] = $object->getScore();
            }

            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $value) {
                    $values[] = $value;
                }

                $data['tags'] = $values;
            }

            if ($object->isInitialized('isSpoiler') && null !== $object->getIsSpoiler()) {
                $data['is_spoiler'] = $object->getIsSpoiler();
            }

            if ($object->isInitialized('isPreliminary') && null !== $object->getIsPreliminary()) {
                $data['is_preliminary'] = $object->getIsPreliminary();
            }

            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [MangaReview::class => false];
        }
    }
} else {
    class MangaReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return MangaReview::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof MangaReview;
        }

        /**
         * @param null|mixed $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new MangaReview();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }

            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }

            if (\array_key_exists('reactions', $data)) {
                $object->setReactions($this->denormalizer->denormalize($data['reactions'], MangaReviewReactions::class, 'json', $context));
                unset($data['reactions']);
            }

            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }

            if (\array_key_exists('review', $data)) {
                $object->setReview($data['review']);
                unset($data['review']);
            }

            if (\array_key_exists('score', $data)) {
                $object->setScore($data['score']);
                unset($data['score']);
            }

            if (\array_key_exists('tags', $data)) {
                $values = [];
                foreach ($data['tags'] as $value) {
                    $values[] = $value;
                }

                $object->setTags($values);
                unset($data['tags']);
            }

            if (\array_key_exists('is_spoiler', $data)) {
                $object->setIsSpoiler($data['is_spoiler']);
                unset($data['is_spoiler']);
            }

            if (\array_key_exists('is_preliminary', $data)) {
                $object->setIsPreliminary($data['is_preliminary']);
                unset($data['is_preliminary']);
            }

            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @param null|mixed $format
         *
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }

            if ($object->isInitialized('reactions') && null !== $object->getReactions()) {
                $data['reactions'] = $this->normalizer->normalize($object->getReactions(), 'json', $context);
            }

            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }

            if ($object->isInitialized('review') && null !== $object->getReview()) {
                $data['review'] = $object->getReview();
            }

            if ($object->isInitialized('score') && null !== $object->getScore()) {
                $data['score'] = $object->getScore();
            }

            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $value) {
                    $values[] = $value;
                }

                $data['tags'] = $values;
            }

            if ($object->isInitialized('isSpoiler') && null !== $object->getIsSpoiler()) {
                $data['is_spoiler'] = $object->getIsSpoiler();
            }

            if ($object->isInitialized('isPreliminary') && null !== $object->getIsPreliminary()) {
                $data['is_preliminary'] = $object->getIsPreliminary();
            }

            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [MangaReview::class => false];
        }
    }
}
