<?php

namespace Space48\BigcommerceApi\Requests\ChannelCurrencyAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listAllCurrencyAssignments
 *
 * Returns a list of currency assignments for all channels.
 */
class ListAllCurrencyAssignments extends Request
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
