<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserUpdatesData;
use Jikan\JikanPHP\Model\UserUpdatesDataAnimeItem;
use Jikan\JikanPHP\Model\UserUpdatesDataMangaItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserUpdatesDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserUpdatesData::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserUpdatesData;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserUpdatesData
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userUpdatesData = new UserUpdatesData();
        if (null === $data || !\is_array($data)) {
            return $userUpdatesData;
        }

        if (\array_key_exists('anime', $data)) {
            $values = [];
            foreach ($data['anime'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, UserUpdatesDataAnimeItem::class, 'json', $context);
            }

            $userUpdatesData->setAnime($values);
        }

        if (\array_key_exists('manga', $data)) {
            $values_1 = [];
            foreach ($data['manga'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, UserUpdatesDataMangaItem::class, 'json', $context);
            }

            $userUpdatesData->setManga($values_1);
        }

        return $userUpdatesData;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getAnime()) {
            $values = [];
            foreach ($object->getAnime() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $data['anime'] = $values;
        }

        if (null !== $object->getManga()) {
            $values_1 = [];
            foreach ($object->getManga() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }

            $data['manga'] = $values_1;
        }

        return $data;
    }
}
