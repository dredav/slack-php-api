<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConversationsRepliesGetResponse200MessagesItemItem0RepliesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem0RepliesItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0RepliesItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0RepliesItem();
        $data = clone $data;
        if (property_exists($data, 'ts')) {
            $value = $data->{'ts'};
            if (is_float($data->{'ts'})) {
                $value = $data->{'ts'};
            } elseif (is_string($data->{'ts'})) {
                $value = $data->{'ts'};
            }
            $object->setTs($value);
            unset($data->{'ts'});
        }
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
            unset($data->{'user'});
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTs()) {
            $value = $object->getTs();
            if (is_float($object->getTs())) {
                $value = $object->getTs();
            } elseif (is_string($object->getTs())) {
                $value = $object->getTs();
            }
            $data->{'ts'} = $value;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
