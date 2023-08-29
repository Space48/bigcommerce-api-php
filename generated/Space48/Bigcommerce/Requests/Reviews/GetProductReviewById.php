<?php

namespace Space48\Bigcommerce\Requests\Reviews;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProductReviewById
 *
 * Returns a single *Product Review*. Optional parameters maybe passed in.
 */
class GetProductReviewById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/reviews/{$this->reviewId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected int $reviewId,
		protected string $includeFields,
		protected string $excludeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields];
	}
}
