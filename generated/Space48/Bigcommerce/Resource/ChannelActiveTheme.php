<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ChannelActiveTheme\GetChannelActiveTheme;
use Space48\Bigcommerce\Resource;

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
