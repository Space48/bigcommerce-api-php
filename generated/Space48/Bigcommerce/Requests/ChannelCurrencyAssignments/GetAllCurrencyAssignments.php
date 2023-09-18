<?php

namespace Space48\Bigcommerce\Requests\ChannelCurrencyAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllCurrencyAssignments
 *
 * Returns a list of currency assignments for all channels.
 */
class GetAllCurrencyAssignments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/currency-assignments";
	}


	public function __construct()
	{
	}
}
