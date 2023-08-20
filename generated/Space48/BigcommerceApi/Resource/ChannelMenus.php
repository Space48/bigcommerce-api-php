<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ChannelMenus\DeleteChannelMenus;
use Space48\BigcommerceApi\Requests\ChannelMenus\GetChannelMenus;
use Space48\BigcommerceApi\Requests\ChannelMenus\PostChannelMenus;
use Space48\BigcommerceApi\Resource;

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
	public function postChannelMenus(int $channelId): Response
	{
		return $this->connector->send(new PostChannelMenus($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function deleteChannelMenus(int $channelId): Response
	{
		return $this->connector->send(new DeleteChannelMenus($channelId));
	}
}
