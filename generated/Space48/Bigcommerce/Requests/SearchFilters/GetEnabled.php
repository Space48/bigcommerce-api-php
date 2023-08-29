<?php

namespace Space48\Bigcommerce\Requests\SearchFilters;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getEnabled
 *
 * Returns a list of enabled default [Product
 * Filtering](https://support.bigcommerce.com/s/article/Product-Filtering-Settings) filters. These
 * filters will be used if a store does not have contextual overrides.
 */
class GetEnabled extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/search/filters";
	}


	public function __construct()
	{
	}
}
