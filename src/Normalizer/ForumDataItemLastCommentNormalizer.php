<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\ForumDataItemLastComment;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ForumDataItemLastCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return ForumDataItemLastComment::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof ForumDataItemLastComment;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|ForumDataItemLastComment
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $forumDataItemLastComment = new ForumDataItemLastComment();
        if (null === $data || !\is_array($data)) {
            return $forumDataItemLastComment;
        }

        if (\array_key_exists('url', $data)) {
            $forumDataItemLastComment->setUrl($data['url']);
        }

        if (\array_key_exists('author_username', $data)) {
            $forumDataItemLastComment->setAuthorUsername($data['author_username']);
        }

        if (\array_key_exists('author_url', $data)) {
            $forumDataItemLastComment->setAuthorUrl($data['author_url']);
        }

        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $forumDataItemLastComment->setDate($data['date']);
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $forumDataItemLastComment->setDate(null);
        }

        return $forumDataItemLastComment;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getAuthorUsername()) {
            $data['author_username'] = $object->getAuthorUsername();
        }

        if (null !== $object->getAuthorUrl()) {
            $data['author_url'] = $object->getAuthorUrl();
        }

        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        return $data;
    }
}
