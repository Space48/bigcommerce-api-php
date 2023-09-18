<?php

namespace Space48\Bigcommerce\Requests\SearchFilters;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * upsertSettingsFiltersContexts
 *
 * Upserts contextual filters for a particular channel or category.
 *
 * **Usage Notes**
 *
 * Contextual
 * filters allow you to configure the enabled filters per channel or category, so that shoppers can
 * filter by the most relevant criteria.
 *
 * You can change the order of the filters on the live site by
 * changing the order of the filters you send.
 */
class UpsertSettingsFiltersContexts extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/settings/search/filters/contexts";
	}


	public function __construct()
	{
	}
}
