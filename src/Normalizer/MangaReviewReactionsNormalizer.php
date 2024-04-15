<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaReviewReactions;
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
    class MangaReviewReactionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return MangaReviewReactions::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof MangaReviewReactions;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new MangaReviewReactions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('overall', $data)) {
                $object->setOverall($data['overall']);
                unset($data['overall']);
            }

            if (\array_key_exists('nice', $data)) {
                $object->setNice($data['nice']);
                unset($data['nice']);
            }

            if (\array_key_exists('love_it', $data)) {
                $object->setLoveIt($data['love_it']);
                unset($data['love_it']);
            }

            if (\array_key_exists('funny', $data)) {
                $object->setFunny($data['funny']);
                unset($data['funny']);
            }

            if (\array_key_exists('confusing', $data)) {
                $object->setConfusing($data['confusing']);
                unset($data['confusing']);
            }

            if (\array_key_exists('informative', $data)) {
                $object->setInformative($data['informative']);
                unset($data['informative']);
            }

            if (\array_key_exists('well_written', $data)) {
                $object->setWellWritten($data['well_written']);
                unset($data['well_written']);
            }

            if (\array_key_exists('creative', $data)) {
                $object->setCreative($data['creative']);
                unset($data['creative']);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('overall') && null !== $object->getOverall()) {
                $data['overall'] = $object->getOverall();
            }

            if ($object->isInitialized('nice') && null !== $object->getNice()) {
                $data['nice'] = $object->getNice();
            }

            if ($object->isInitialized('loveIt') && null !== $object->getLoveIt()) {
                $data['love_it'] = $object->getLoveIt();
            }

            if ($object->isInitialized('funny') && null !== $object->getFunny()) {
                $data['funny'] = $object->getFunny();
            }

            if ($object->isInitialized('confusing') && null !== $object->getConfusing()) {
                $data['confusing'] = $object->getConfusing();
            }

            if ($object->isInitialized('informative') && null !== $object->getInformative()) {
                $data['informative'] = $object->getInformative();
            }

            if ($object->isInitialized('wellWritten') && null !== $object->getWellWritten()) {
                $data['well_written'] = $object->getWellWritten();
            }

            if ($object->isInitialized('creative') && null !== $object->getCreative()) {
                $data['creative'] = $object->getCreative();
            }

            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [MangaReviewReactions::class => false];
        }
    }
} else {
    class MangaReviewReactionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return MangaReviewReactions::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof MangaReviewReactions;
        }

        /**
         * @param null|mixed $format
         */
        public function denormalize($data, $type, $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new MangaReviewReactions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('overall', $data)) {
                $object->setOverall($data['overall']);
                unset($data['overall']);
            }

            if (\array_key_exists('nice', $data)) {
                $object->setNice($data['nice']);
                unset($data['nice']);
            }

            if (\array_key_exists('love_it', $data)) {
                $object->setLoveIt($data['love_it']);
                unset($data['love_it']);
            }

            if (\array_key_exists('funny', $data)) {
                $object->setFunny($data['funny']);
                unset($data['funny']);
            }

            if (\array_key_exists('confusing', $data)) {
                $object->setConfusing($data['confusing']);
                unset($data['confusing']);
            }

            if (\array_key_exists('informative', $data)) {
                $object->setInformative($data['informative']);
                unset($data['informative']);
            }

            if (\array_key_exists('well_written', $data)) {
                $object->setWellWritten($data['well_written']);
                unset($data['well_written']);
            }

            if (\array_key_exists('creative', $data)) {
                $object->setCreative($data['creative']);
                unset($data['creative']);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @param null|mixed $format
         */
        public function normalize($object, $format = null, array $context = []): array|\ArrayObject|bool|float|int|string|null
        {
            $data = [];
            if ($object->isInitialized('overall') && null !== $object->getOverall()) {
                $data['overall'] = $object->getOverall();
            }

            if ($object->isInitialized('nice') && null !== $object->getNice()) {
                $data['nice'] = $object->getNice();
            }

            if ($object->isInitialized('loveIt') && null !== $object->getLoveIt()) {
                $data['love_it'] = $object->getLoveIt();
            }

            if ($object->isInitialized('funny') && null !== $object->getFunny()) {
                $data['funny'] = $object->getFunny();
            }

            if ($object->isInitialized('confusing') && null !== $object->getConfusing()) {
                $data['confusing'] = $object->getConfusing();
            }

            if ($object->isInitialized('informative') && null !== $object->getInformative()) {
                $data['informative'] = $object->getInformative();
            }

            if ($object->isInitialized('wellWritten') && null !== $object->getWellWritten()) {
                $data['well_written'] = $object->getWellWritten();
            }

            if ($object->isInitialized('creative') && null !== $object->getCreative()) {
                $data['creative'] = $object->getCreative();
            }

            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [MangaReviewReactions::class => false];
        }
    }
}
