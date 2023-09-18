<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\InventoryNotifications\GetInventoryNotificationsSettings;
use Space48\Bigcommerce\Requests\InventoryNotifications\UpdateInventoryNotificationsSettings;
use Space48\Bigcommerce\Resource;

class InventoryNotifications extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getInventoryNotificationsSettings(?int $channelId): Response
	{
		return $this->connector->send(new GetInventoryNotificationsSettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateInventoryNotificationsSettings(?int $channelId): Response
	{
		return $this->connector->send(new UpdateInventoryNotificationsSettings($channelId));
	}
}
