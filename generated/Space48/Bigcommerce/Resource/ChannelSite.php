<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ChannelSite\CreateChannelSite;
use Space48\Bigcommerce\Requests\ChannelSite\DeleteChannelSite;
use Space48\Bigcommerce\Requests\ChannelSite\GetChannelSite;
use Space48\Bigcommerce\Requests\ChannelSite\UpdateChannelSite;
use Space48\Bigcommerce\Resource;

class ChannelSite extends Resource
{
	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function getChannelSite(int $channelId): Response
	{
		return $this->connector->send(new GetChannelSite($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function updateChannelSite(int $channelId): Response
	{
		return $this->connector->send(new UpdateChannelSite($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function createChannelSite(int $channelId): Response
	{
		return $this->connector->send(new CreateChannelSite($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function deleteChannelSite(int $channelId): Response
	{
		return $this->connector->send(new DeleteChannelSite($channelId));
	}
}
