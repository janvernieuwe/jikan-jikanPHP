<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaImages;
use Jikan\JikanPHP\Model\MangaImagesJpg;
use Jikan\JikanPHP\Model\MangaImagesWebp;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MangaImagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return MangaImages::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaImages;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaImages
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaImages = new MangaImages();
        if (null === $data || !\is_array($data)) {
            return $mangaImages;
        }

        if (\array_key_exists('jpg', $data)) {
            $mangaImages->setJpg($this->denormalizer->denormalize($data['jpg'], MangaImagesJpg::class, 'json', $context));
        }

        if (\array_key_exists('webp', $data)) {
            $mangaImages->setWebp($this->denormalizer->denormalize($data['webp'], MangaImagesWebp::class, 'json', $context));
        }

        return $mangaImages;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getJpg()) {
            $data['jpg'] = $this->normalizer->normalize($object->getJpg(), 'json', $context);
        }

        if (null !== $object->getWebp()) {
            $data['webp'] = $this->normalizer->normalize($object->getWebp(), 'json', $context);
        }

        return $data;
    }
}
