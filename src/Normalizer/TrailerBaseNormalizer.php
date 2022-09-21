<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\TrailerBase;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TrailerBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return TrailerBase::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof TrailerBase;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|TrailerBase
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $trailerBase = new TrailerBase();
        if (null === $data || !\is_array($data)) {
            return $trailerBase;
        }

        if (\array_key_exists('youtube_id', $data) && null !== $data['youtube_id']) {
            $trailerBase->setYoutubeId($data['youtube_id']);
        } elseif (\array_key_exists('youtube_id', $data) && null === $data['youtube_id']) {
            $trailerBase->setYoutubeId(null);
        }

        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $trailerBase->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && null === $data['url']) {
            $trailerBase->setUrl(null);
        }

        if (\array_key_exists('embed_url', $data) && null !== $data['embed_url']) {
            $trailerBase->setEmbedUrl($data['embed_url']);
        } elseif (\array_key_exists('embed_url', $data) && null === $data['embed_url']) {
            $trailerBase->setEmbedUrl(null);
        }

        return $trailerBase;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getYoutubeId()) {
            $data['youtube_id'] = $object->getYoutubeId();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getEmbedUrl()) {
            $data['embed_url'] = $object->getEmbedUrl();
        }

        return $data;
    }
}
