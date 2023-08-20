<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ChannelSiteCheckoutUrl\DeleteCheckoutUrl;
use Space48\BigcommerceApi\Requests\ChannelSiteCheckoutUrl\PutCheckoutUrl;
use Space48\BigcommerceApi\Resource;

class ChannelSiteCheckoutUrl extends Resource
{
	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function putCheckoutUrl(int $channelId): Response
	{
		return $this->connector->send(new PutCheckoutUrl($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function deleteCheckoutUrl(int $channelId): Response
	{
		return $this->connector->send(new DeleteCheckoutUrl($channelId));
	}
}
