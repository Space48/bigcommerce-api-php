<?php

namespace Space48\Bigcommerce\Requests\InventoryNotifications;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Inventory Notifications Settings
 *
 * Returns inventory notification settings.
 * * `channel_id` can be used as a query parameter to get
 * inventory notification settings per channel. If omitted, you will interact with the global setting
 * only.
 */
class GetInventoryNotificationsSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/inventory/notifications";
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id' => $this->channelId];
	}
}
