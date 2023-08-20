<?php

namespace Space48\BigcommerceApi\Requests\ChannelCurrencyAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateSingleChannelCurrencyAssignments
 *
 * Updates enabled currencies and default currency for a specific channel. Note that currencies must be
 * added first in the **Settings > Setup > Currencies** settings from an active MSF-enabled BigCommerce
 * Control Panel before the currencies can be assigned to a channel.
 */
class UpdateSingleChannelCurrencyAssignments extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/currency-assignments";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
