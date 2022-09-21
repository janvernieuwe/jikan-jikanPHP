<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CommonImages;
use Jikan\JikanPHP\Model\NewsDataItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NewsDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return NewsDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof NewsDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|NewsDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $newsDataItem = new NewsDataItem();
        if (null === $data || !\is_array($data)) {
            return $newsDataItem;
        }

        if (\array_key_exists('mal_id', $data)) {
            $newsDataItem->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $newsDataItem->setUrl($data['url']);
        }

        if (\array_key_exists('title', $data)) {
            $newsDataItem->setTitle($data['title']);
        }

        if (\array_key_exists('date', $data)) {
            $newsDataItem->setDate($data['date']);
        }

        if (\array_key_exists('author_username', $data)) {
            $newsDataItem->setAuthorUsername($data['author_username']);
        }

        if (\array_key_exists('author_url', $data)) {
            $newsDataItem->setAuthorUrl($data['author_url']);
        }

        if (\array_key_exists('forum_url', $data)) {
            $newsDataItem->setForumUrl($data['forum_url']);
        }

        if (\array_key_exists('images', $data)) {
            $newsDataItem->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
        }

        if (\array_key_exists('comments', $data)) {
            $newsDataItem->setComments($data['comments']);
        }

        if (\array_key_exists('excerpt', $data)) {
            $newsDataItem->setExcerpt($data['excerpt']);
        }

        return $newsDataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        if (null !== $object->getAuthorUsername()) {
            $data['author_username'] = $object->getAuthorUsername();
        }

        if (null !== $object->getAuthorUrl()) {
            $data['author_url'] = $object->getAuthorUrl();
        }

        if (null !== $object->getForumUrl()) {
            $data['forum_url'] = $object->getForumUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }

        if (null !== $object->getExcerpt()) {
            $data['excerpt'] = $object->getExcerpt();
        }

        return $data;
    }
}
