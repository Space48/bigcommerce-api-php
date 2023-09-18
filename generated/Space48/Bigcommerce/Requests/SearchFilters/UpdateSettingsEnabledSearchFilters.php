<?php

namespace Space48\Bigcommerce\Requests\SearchFilters;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateSettingsEnabledSearchFilters
 *
 * Updates enabled default [Product
 * Filtering](https://support.bigcommerce.com/s/article/Product-Filtering-Settings) filters.
 */
class UpdateSettingsEnabledSearchFilters extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/settings/search/filters";
	}


	public function __construct()
	{
	}
}
