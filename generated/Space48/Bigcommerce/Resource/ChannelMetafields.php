<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ChannelMetafields\CreateChannelMetafield;
use Space48\Bigcommerce\Requests\ChannelMetafields\DeleteChannelMetafield;
use Space48\Bigcommerce\Requests\ChannelMetafields\GetChannelMetafield;
use Space48\Bigcommerce\Requests\ChannelMetafields\GetChannelMetafields;
use Space48\Bigcommerce\Requests\ChannelMetafields\UpdateChannelMetafield;
use Space48\Bigcommerce\Resource;

class ChannelMetafields extends Resource
{
	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $key Filter based on a metafield's key.
	 * @param string $namespace Filter based on a metafield's namespace.
	 * @param string $direction Sort direction.
	 */
	public function getChannelMetafields(int $channelId, ?string $key, ?string $namespace, ?string $direction): Response
	{
		return $this->connector->send(new GetChannelMetafields($channelId, $key, $namespace, $direction));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function createChannelMetafield(int $channelId): Response
	{
		return $this->connector->send(new CreateChannelMetafield($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $metafieldId
	 */
	public function getChannelMetafield(int $channelId, string $metafieldId): Response
	{
		return $this->connector->send(new GetChannelMetafield($channelId, $metafieldId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $metafieldId
	 */
	public function updateChannelMetafield(int $channelId, string $metafieldId): Response
	{
		return $this->connector->send(new UpdateChannelMetafield($channelId, $metafieldId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $metafieldId
	 */
	public function deleteChannelMetafield(int $channelId, string $metafieldId): Response
	{
		return $this->connector->send(new DeleteChannelMetafield($channelId, $metafieldId));
	}
}
