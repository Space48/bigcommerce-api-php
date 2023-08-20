<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ChannelActiveTheme\GetChannelActiveTheme;
use Space48\BigcommerceApi\Resource;

class ChannelActiveTheme extends Resource
{
	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function getChannelActiveTheme(int $channelId): Response
	{
		return $this->connector->send(new GetChannelActiveTheme($channelId));
	}
}
