<?php

namespace Space48\Bigcommerce\Requests\ChannelCurrencyAssignments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createSingleChannelCurrencyAssignments
 *
 * Sets enabled currencies and default currency for a specific channel. Note that currencies must be
 * added first in the **Settings > Setup > Currencies** settings from an active MSF-enabled BigCommerce
 * Control Panel before the currencies can be assigned to a channel.
 */
class CreateSingleChannelCurrencyAssignments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
