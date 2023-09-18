<?php

namespace Space48\Bigcommerce\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProduct
 *
 * Returns a single *Product*. Optional parameters can be passed in.
 */
class GetProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param null|string $include Sub-resources to include on a product, in a comma-separated list. If `options` or `modifiers` is used, results are limited to 10 per page.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected ?string $include = null,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include, 'include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields]);
	}
}
