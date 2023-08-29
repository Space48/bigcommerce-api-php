<?php

namespace Space48\Bigcommerce\Requests\TimeZone;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get System Timestamp
 *
 * Returns the system timestamp at the time of the request. The time resource is useful for validating
 * API authentication details and testing client connections.
 */
class GetSystemTimestamp extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/time";
	}


	public function __construct()
	{
	}
}
