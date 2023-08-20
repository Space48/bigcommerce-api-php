<?php

namespace Space48\BigcommerceApi\Requests\Reviews;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProductReviews
 *
 * Returns a list of all *Product Reviews*. Optional parameters can be passed in.
 */
class GetProductReviews extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/reviews";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param int $status Filter items by status. `1` for approved, `0` for pending.
	 */
	public function __construct(
		protected int $productId,
		protected string $includeFields,
		protected string $excludeFields,
		protected int $status,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields, 'status' => $this->status];
	}
}
