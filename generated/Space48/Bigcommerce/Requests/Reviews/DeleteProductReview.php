<?php

namespace Space48\Bigcommerce\Requests\Reviews;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProductReview
 *
 * Deletes a *Product Review*.
 */
class DeleteProductReview extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/reviews/{$this->reviewId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 */
	public function __construct(
		protected int $productId,
		protected int $reviewId,
	) {
	}
}
