<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Endpoint;

class RtmStart extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Starts a Real Time Messaging session.
     *
     * @param array $queryParameters {
     *
     *     @var bool $no_latest Exclude latest timestamps for channels, groups, mpims, and ims. Automatically sets `no_unreads` to `1`
     *     @var bool $simple_latest return timestamp only for latest message object of each channel (improves performance)
     *     @var bool $include_locale Set this to `true` to receive the locale for users and channels. Defaults to `false`
     *     @var bool $presence_sub Only deliver presence events when requested by subscription. See [presence subscriptions](/docs/presence-and-status#subscriptions).
     *     @var bool $no_unreads skip unread counts for each channel (improves performance)
     *     @var bool $batch_presence_aware Batch presence deliveries via subscription. Enabling changes the shape of `presence_change` events. See [batch presence](/docs/presence-and-status#batching).
     *     @var bool $mpim_aware returns MPIMs to the client in the API response
     *     @var string $token Authentication token. Requires scope: `rtm:stream`
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/rtm.start';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['no_latest', 'simple_latest', 'include_locale', 'presence_sub', 'no_unreads', 'batch_presence_aware', 'mpim_aware', 'token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('no_latest', ['bool']);
        $optionsResolver->setAllowedTypes('simple_latest', ['bool']);
        $optionsResolver->setAllowedTypes('include_locale', ['bool']);
        $optionsResolver->setAllowedTypes('presence_sub', ['bool']);
        $optionsResolver->setAllowedTypes('no_unreads', ['bool']);
        $optionsResolver->setAllowedTypes('batch_presence_aware', ['bool']);
        $optionsResolver->setAllowedTypes('mpim_aware', ['bool']);
        $optionsResolver->setAllowedTypes('token', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \JoliCode\Slack\Api\Model\RtmStartGetResponse200|\JoliCode\Slack\Api\Model\RtmStartGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\RtmStartGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\RtmStartGetResponsedefault', 'json');
    }
}
