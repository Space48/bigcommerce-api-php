<?php

namespace Space48\BigcommerceApi\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProducts
 *
 * Updates products in batches. Batches are limited to 10 products.
 *
 * **Required Fields**
 * * `id` -
 * product `id` is required for batch updates to products.
 *
 * **Read-Only Fields**
 * - `id`
 * -
 * `date_created`
 * - `date_modified`
 * - `calculated_price`
 * - `base_variant_id`
 */
class UpdateProducts extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products";
	}


	/**
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 */
	public function __construct(
		protected string $includeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include_fields' => $this->includeFields];
	}
}
