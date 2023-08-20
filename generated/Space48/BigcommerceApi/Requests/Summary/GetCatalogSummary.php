<?php

namespace Space48\BigcommerceApi\Requests\Summary;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCatalogSummary
 *
 * Returns a lightweight inventory summary from the BigCommerce Catalog.
 *
 * The inventory summary
 * includes:
 * * "inventory_count"
 * * "variant_count"
 * * "inventory_value"
 * * "highest_variant_price"
 * *
 * "average_variant_price"
 * * "lowest_variant_price"
 * * "oldest_variant_date"
 * * "newest_variant_date"
 * *
 * "primary_category_id"
 * * "primary_category_name"
 */
class GetCatalogSummary extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/summary";
	}


	public function __construct()
	{
	}
}
