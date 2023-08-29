<?php

namespace Space48\Bigcommerce\Requests\StoreInformation;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Store Information
 *
 * Returns metadata about a store.
 */
class GetStoreInformation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/store";
	}


	public function __construct()
	{
	}
}
