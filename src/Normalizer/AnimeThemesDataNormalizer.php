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

class AnimeThemesDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\AnimeThemesData' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\AnimeThemesData' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\AnimeThemesData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('openings', $data)) {
            $values = [];
            foreach ($data['openings'] as $value) {
                $values[] = $value;
            }
            $object->setOpenings($values);
        }
        if (\array_key_exists('endings', $data)) {
            $values_1 = [];
            foreach ($data['endings'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEndings($values_1);
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
        if (null !== $object->getOpenings()) {
            $values = [];
            foreach ($object->getOpenings() as $value) {
                $values[] = $value;
            }
            $data['openings'] = $values;
        }
        if (null !== $object->getEndings()) {
            $values_1 = [];
            foreach ($object->getEndings() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['endings'] = $values_1;
        }

        return $data;
    }
}
