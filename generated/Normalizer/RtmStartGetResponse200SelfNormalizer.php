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

class RtmStartGetResponse200SelfNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\RtmStartGetResponse200Self';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\RtmStartGetResponse200Self;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\RtmStartGetResponse200Self();
        $data = clone $data;
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
            unset($data->{'created'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        }
        if (property_exists($data, 'manual_presence')) {
            $object->setManualPresence($data->{'manual_presence'});
            unset($data->{'manual_presence'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        if (property_exists($data, 'prefs')) {
            $object->setPrefs($this->denormalizer->denormalize($data->{'prefs'}, 'JoliCode\\Slack\\Api\\Model\\PrefsPrefs', 'json', $context));
            unset($data->{'prefs'});
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getManualPresence()) {
            $data->{'manual_presence'} = $object->getManualPresence();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPrefs()) {
            $data->{'prefs'} = $this->normalizer->normalize($object->getPrefs(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}
