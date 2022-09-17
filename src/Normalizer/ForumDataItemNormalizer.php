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

class ForumDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\ForumDataItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\ForumDataItem' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\ForumDataItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mal_id', $data)) {
            $object->setMalId($data['mal_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
        }
        if (\array_key_exists('author_username', $data)) {
            $object->setAuthorUsername($data['author_username']);
        }
        if (\array_key_exists('author_url', $data)) {
            $object->setAuthorUrl($data['author_url']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }
        if (\array_key_exists('last_comment', $data)) {
            $object->setLastComment($this->denormalizer->denormalize($data['last_comment'], 'Jikan\\JikanPHP\\Model\\ForumDataItemLastComment', 'json', $context));
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
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getLastComment()) {
            $data['last_comment'] = $this->normalizer->normalize($object->getLastComment(), 'json', $context);
        }

        return $data;
    }
}
