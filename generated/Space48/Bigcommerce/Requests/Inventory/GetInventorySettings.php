<?php

namespace Space48\Bigcommerce\Requests\Inventory;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Inventory Settings
 *
 * Get Inventory Settings
 */
class GetInventorySettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/inventory";
	}


	/**
	 * @param null|int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected ?int $channelId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['channel_id' => $this->channelId]);
	}
}
