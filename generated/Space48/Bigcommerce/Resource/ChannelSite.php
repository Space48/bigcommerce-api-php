<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ChannelSite\DeleteChannelSite;
use Space48\Bigcommerce\Requests\ChannelSite\GetChannelSite;
use Space48\Bigcommerce\Requests\ChannelSite\PostChannelSite;
use Space48\Bigcommerce\Requests\ChannelSite\PutChannelSite;
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
	public function putChannelSite(int $channelId): Response
	{
		return $this->connector->send(new PutChannelSite($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function postChannelSite(int $channelId): Response
	{
		return $this->connector->send(new PostChannelSite($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function deleteChannelSite(int $channelId): Response
	{
		return $this->connector->send(new DeleteChannelSite($channelId));
	}
}
