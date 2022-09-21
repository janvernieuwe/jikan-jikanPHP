<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItemMeta;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeVideosDataMusicVideosItemMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeVideosDataMusicVideosItemMeta::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeVideosDataMusicVideosItemMeta;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeVideosDataMusicVideosItemMeta
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeVideosDataMusicVideosItemMeta = new AnimeVideosDataMusicVideosItemMeta();
        if (null === $data || !\is_array($data)) {
            return $animeVideosDataMusicVideosItemMeta;
        }

        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $animeVideosDataMusicVideosItemMeta->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && null === $data['title']) {
            $animeVideosDataMusicVideosItemMeta->setTitle(null);
        }

        if (\array_key_exists('author', $data) && null !== $data['author']) {
            $animeVideosDataMusicVideosItemMeta->setAuthor($data['author']);
        } elseif (\array_key_exists('author', $data) && null === $data['author']) {
            $animeVideosDataMusicVideosItemMeta->setAuthor(null);
        }

        return $animeVideosDataMusicVideosItemMeta;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        if (null !== $object->getAuthor()) {
            $data['author'] = $object->getAuthor();
        }

        return $data;
    }
}
