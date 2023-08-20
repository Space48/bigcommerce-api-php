<?php

namespace Space48\BigcommerceApi\Requests\ChannelCurrencyAssignments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createMultipleChannelsCurrencyAssignments
 *
 * Sets enabled currencies and default currency for multiple channels. Note that currencies must be
 * added first in the **Settings > Setup > Currencies** settings from an active MSF-enabled BigCommerce
 * Control Panel before the currencies can be assigned to a channel.
 */
class CreateMultipleChannelsCurrencyAssignments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/channels/currency-assignments";
	}


	public function __construct()
	{
	}
}
