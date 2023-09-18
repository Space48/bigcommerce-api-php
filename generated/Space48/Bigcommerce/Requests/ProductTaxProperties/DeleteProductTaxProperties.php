<?php

namespace Space48\Bigcommerce\Requests\ProductTaxProperties;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProductTaxProperties
 *
 * Delete tax properties that are associated with one or more products.
 */
class DeleteProductTaxProperties extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/tax/products/properties";
	}


	/**
	 * @param string $productIdIn ID of product. To target multiple products, provide a comma-separated list of IDs such as `12,34,56`
	 */
	public function __construct(
		protected string $productIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['product_id:in' => $this->productIdIn]);
	}
}
