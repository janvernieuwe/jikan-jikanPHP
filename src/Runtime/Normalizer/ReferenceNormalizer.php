<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Runtime\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4) {
    class ReferenceNormalizer implements NormalizerInterface
    {
        /**
         * {@inheritdoc}
         */
        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            return ['$ref' => (string) $object->getReferenceUri()];
        }

        /**
         * {@inheritdoc}
         */
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return $data instanceof Reference;
        }
    }
} else {
    class ReferenceNormalizer implements NormalizerInterface
    {
        /**
         * {@inheritdoc}
         */
        public function normalize($object, $format = null, array $context = [])
        {
            return ['$ref' => (string) $object->getReferenceUri()];
        }

        /**
         * {@inheritdoc}
         */
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return $data instanceof Reference;
        }
    }
}
