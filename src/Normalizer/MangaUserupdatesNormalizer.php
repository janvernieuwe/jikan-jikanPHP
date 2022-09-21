<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaUserupdates;
use Jikan\JikanPHP\Model\MangaUserupdatesdataItem;
use Jikan\JikanPHP\Model\PaginationPagination;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MangaUserupdatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return MangaUserupdates::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaUserupdates;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaUserupdates
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaUserupdates = new MangaUserupdates();
        if (null === $data || !\is_array($data)) {
            return $mangaUserupdates;
        }

        if (\array_key_exists('data', $data)) {
            $values = [];
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, MangaUserupdatesdataItem::class, 'json', $context);
            }

            $mangaUserupdates->setData($values);
        }

        if (\array_key_exists('pagination', $data)) {
            $mangaUserupdates->setPagination($this->denormalizer->denormalize($data['pagination'], PaginationPagination::class, 'json', $context));
        }

        return $mangaUserupdates;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getData()) {
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $data['data'] = $values;
        }

        if (null !== $object->getPagination()) {
            $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
        }

        return $data;
    }
}
