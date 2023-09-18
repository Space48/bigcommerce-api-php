<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ChannelSiteCheckoutUrl\DeleteCheckoutUrl;
use Space48\Bigcommerce\Requests\ChannelSiteCheckoutUrl\UpdateCheckoutUrl;
use Space48\Bigcommerce\Resource;

class ChannelSiteCheckoutUrl extends Resource
{
	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function updateCheckoutUrl(int $channelId): Response
	{
		return $this->connector->send(new UpdateCheckoutUrl($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function deleteCheckoutUrl(int $channelId): Response
	{
		return $this->connector->send(new DeleteCheckoutUrl($channelId));
	}
}
