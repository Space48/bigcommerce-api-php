<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ChannelMetafields\DeleteChannelsChannelIdMetafieldsMetafieldId;
use Space48\Bigcommerce\Requests\ChannelMetafields\GetChannelsChannelIdMetafields;
use Space48\Bigcommerce\Requests\ChannelMetafields\GetChannelsChannelIdMetafieldsMetafieldId;
use Space48\Bigcommerce\Requests\ChannelMetafields\PostChannelsChannelIdMetafields;
use Space48\Bigcommerce\Requests\ChannelMetafields\PutChannelsChannelIdMetafieldsMetafieldId;
use Space48\Bigcommerce\Resource;

class ChannelMetafields extends Resource
{
	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $key Filter based on a metafield's key.
	 * @param string $namespace Filter based on a metafield's namespace.
	 * @param string $direction Sort direction.
	 */
	public function getChannelsChannelIdMetafields(
		int $channelId,
		string $key,
		string $namespace,
		string $direction,
	): Response
	{
		return $this->connector->send(new GetChannelsChannelIdMetafields($channelId, $key, $namespace, $direction));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function postChannelsChannelIdMetafields(int $channelId): Response
	{
		return $this->connector->send(new PostChannelsChannelIdMetafields($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $metafieldId
	 */
	public function getChannelsChannelIdMetafieldsMetafieldId(int $channelId, string $metafieldId): Response
	{
		return $this->connector->send(new GetChannelsChannelIdMetafieldsMetafieldId($channelId, $metafieldId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $metafieldId
	 */
	public function putChannelsChannelIdMetafieldsMetafieldId(int $channelId, string $metafieldId): Response
	{
		return $this->connector->send(new PutChannelsChannelIdMetafieldsMetafieldId($channelId, $metafieldId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $metafieldId
	 */
	public function deleteChannelsChannelIdMetafieldsMetafieldId(int $channelId, string $metafieldId): Response
	{
		return $this->connector->send(new DeleteChannelsChannelIdMetafieldsMetafieldId($channelId, $metafieldId));
	}
}
