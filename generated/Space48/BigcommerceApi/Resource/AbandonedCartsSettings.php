<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\AbandonedCartsSettings\GetChannelAbandonedCartSettings;
use Space48\BigcommerceApi\Requests\AbandonedCartsSettings\UpdateChannelAbandonedCartSettings;
use Space48\BigcommerceApi\Requests\AbandonedCartsSettings\UpdateGlobalAbandonedCartSettings;
use Space48\BigcommerceApi\Resource;

class AbandonedCartsSettings extends Resource
{
	public function updateGlobalAbandonedCartSettings(): Response
	{
		return $this->connector->send(new UpdateGlobalAbandonedCartSettings());
	}


	/**
	 * @param string $channelId
	 * @param int $channelId The channel ID of the settings overrides
	 */
	public function getChannelAbandonedCartSettings(int $channelId): Response
	{
		return $this->connector->send(new GetChannelAbandonedCartSettings($channelId, $channelId));
	}


	/**
	 * @param string $channelId
	 * @param int $channelId The channel ID of the settings overrides
	 */
	public function updateChannelAbandonedCartSettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateChannelAbandonedCartSettings($channelId, $channelId));
	}
}
