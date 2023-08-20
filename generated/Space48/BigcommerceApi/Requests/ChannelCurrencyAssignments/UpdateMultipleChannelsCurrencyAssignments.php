<?php

namespace Space48\BigcommerceApi\Requests\ChannelCurrencyAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateMultipleChannelsCurrencyAssignments
 *
 * Updates enabled currencies and default currency for multiple channels. Note that currencies must be
 * added first in the **Settings > Setup > Currencies** settings from an active MSF-enabled BigCommerce
 * Control Panel before the currencies can be assigned to a channel.
 */
class UpdateMultipleChannelsCurrencyAssignments extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/channels/currency-assignments";
	}


	public function __construct()
	{
	}
}
