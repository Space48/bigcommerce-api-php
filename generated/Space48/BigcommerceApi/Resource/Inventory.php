<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Inventory\GetInventorySettings;
use Space48\BigcommerceApi\Requests\Inventory\UpdateInventorySettings;
use Space48\BigcommerceApi\Resource;

class Inventory extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getInventorySettings(int $channelId): Response
	{
		return $this->connector->send(new GetInventorySettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateInventorySettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateInventorySettings($channelId));
	}
}
