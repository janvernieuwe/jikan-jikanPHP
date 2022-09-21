<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeThemesData;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeThemesDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeThemesData::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeThemesData;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeThemesData
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeThemesData = new AnimeThemesData();
        if (null === $data || !\is_array($data)) {
            return $animeThemesData;
        }

        if (\array_key_exists('openings', $data)) {
            $values = [];
            foreach ($data['openings'] as $value) {
                $values[] = $value;
            }

            $animeThemesData->setOpenings($values);
        }

        if (\array_key_exists('endings', $data)) {
            $values_1 = [];
            foreach ($data['endings'] as $value_1) {
                $values_1[] = $value_1;
            }

            $animeThemesData->setEndings($values_1);
        }

        return $animeThemesData;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getOpenings()) {
            $values = [];
            foreach ($object->getOpenings() as $opening) {
                $values[] = $opening;
            }

            $data['openings'] = $values;
        }

        if (null !== $object->getEndings()) {
            $values_1 = [];
            foreach ($object->getEndings() as $ending) {
                $values_1[] = $ending;
            }

            $data['endings'] = $values_1;
        }

        return $data;
    }
}
