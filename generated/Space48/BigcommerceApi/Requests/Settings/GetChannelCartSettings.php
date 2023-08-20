<?php

namespace Space48\BigcommerceApi\Requests\Settings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelCartSettings
 *
 * Returns the per-channel overrides for the cart settings of a store.
 */
class GetChannelCartSettings extends Request
{
	protected Method $method = Method::GET;


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
