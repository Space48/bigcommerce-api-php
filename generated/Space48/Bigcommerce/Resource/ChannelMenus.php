<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ChannelMenus\CreateChannelMenus;
use Space48\Bigcommerce\Requests\ChannelMenus\DeleteChannelMenus;
use Space48\Bigcommerce\Requests\ChannelMenus\GetChannelMenus;
use Space48\Bigcommerce\Resource;

class ChannelMenus extends Resource
{
	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function getChannelMenus(int $channelId): Response
	{
		return $this->connector->send(new GetChannelMenus($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function createChannelMenus(int $channelId): Response
	{
		return $this->connector->send(new CreateChannelMenus($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function deleteChannelMenus(int $channelId): Response
	{
		return $this->connector->send(new DeleteChannelMenus($channelId));
	}
}
