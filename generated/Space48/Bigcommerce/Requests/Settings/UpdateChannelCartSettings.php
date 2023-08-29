<?php

namespace Space48\Bigcommerce\Requests\Settings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateChannelCartSettings
 *
 * Update the per-channel overrides for the cart settings of a store.
 */
class UpdateChannelCartSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/carts/settings/channels/{$this->channelId}";
	}


	/**
	 * @param int $channelId The channel ID of the settings overrides.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
