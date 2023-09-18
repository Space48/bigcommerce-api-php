<?php

namespace Space48\Bigcommerce\Requests\AbandonedCartsSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateChannelAbandonedCartSettings
 *
 * Updates the per-channel overrides for the abandoned cart settings of a store.
 *
 * #### OAuth Scopes
 * |
 * UI Name                                      | Permission | Parameter
 *
 * |
 * |----------------------------------------------|------------|-----------------------------------------------|
 *
 * | Information & Settings                       | modify     | `store_v2_information`
 * |
 */
class UpdateChannelAbandonedCartSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/abandoned-carts/settings/channels/{$this->channelId}";
	}


	/**
	 * @param int $channelId The channel ID of the settings overrides
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
