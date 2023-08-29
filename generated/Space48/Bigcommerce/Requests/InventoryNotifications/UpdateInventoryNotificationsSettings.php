<?php

namespace Space48\Bigcommerce\Requests\InventoryNotifications;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update Inventory Notifications Settings
 *
 * Updates inventory notification settings.
 * * `channel_id` can be used as a query parameter to get
 * inventory notification settings per channel. If omitted, you will interact with the global setting
 * only.
 * * Supplying `null` settings values per channel will delete overrides per given channel and
 * values will be inherited from global level.
 * * Partial updates are not supported within the given
 * endpoint. In order to delete overrides per channel, `null` should be supplied for all the settings
 * within the given endpoint.
 */
class UpdateInventoryNotificationsSettings extends Request
{
	protected Method $method = Method::PUT;


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
