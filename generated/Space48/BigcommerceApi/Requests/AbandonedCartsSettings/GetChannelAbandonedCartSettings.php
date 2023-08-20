<?php

namespace Space48\BigcommerceApi\Requests\AbandonedCartsSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelAbandonedCartSettings
 *
 * Returns the per-channel overrides for the abandoned cart settings of a store.
 */
class GetChannelAbandonedCartSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/abandoned-carts/settings/channels/{$this->channelId}";
	}


	/**
	 * @param string $channelId
	 * @param int $channelId The channel ID of the settings overrides
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
