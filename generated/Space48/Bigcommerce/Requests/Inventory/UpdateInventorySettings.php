<?php

namespace Space48\Bigcommerce\Requests\Inventory;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update Inventory Settings
 *
 * Update inventory settings
 */
class UpdateInventorySettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/settings/inventory";
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
