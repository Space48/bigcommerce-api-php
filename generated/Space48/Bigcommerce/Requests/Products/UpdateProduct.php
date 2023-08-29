<?php

namespace Space48\Bigcommerce\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProduct
 *
 * Updates a *Product*.
 *
 * **Read-Only Fields**
 * - id
 * - date_created
 * - date_modified
 * - calculated_price
 * -
 * base_variant_id
 */
class UpdateProduct extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Sub-resources to include on a product, in a comma-separated list. If `options` or `modifiers` is used, results are limited to 10 per page. The ID and the specified fields will be returned.
	 */
	public function __construct(
		protected int $productId,
		protected string $includeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include_fields' => $this->includeFields];
	}
}
