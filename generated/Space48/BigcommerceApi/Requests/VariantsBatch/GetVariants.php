<?php

namespace Space48\BigcommerceApi\Requests\VariantsBatch;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getVariants
 *
 * Returns a list of all variants in your catalog. Optional parameters can be passed in.
 */
class GetVariants extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/variants";
	}


	/**
	 * @param int $id Filter items by ID.
	 * @param string $sku Filter items by SKU.
	 * @param string $upc Filter items by UPC.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param string $productId A comma-separated list of IDs of products whose variants were requested. For example:`?product_id=:id``?product_id:in=77,80,81`
	 */
	public function __construct(
		protected int $id,
		protected string $sku,
		protected string $upc,
		protected string $includeFields,
		protected string $excludeFields,
		protected string $productId,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'id' => $this->id,
			'sku' => $this->sku,
			'upc' => $this->upc,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
			'product_id' => $this->productId,
		];
	}
}
