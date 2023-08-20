<?php

namespace Space48\BigcommerceApi\Requests\Reviews;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProductReview
 *
 * Updates a *Product Review*.
 *
 * **Required Fields**
 * * none
 *
 * **Read-Only Fields**
 * * id
 */
class UpdateProductReview extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/reviews/{$this->reviewId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 */
	public function __construct(
		protected int $productId,
		protected int $reviewId,
	) {
	}
}
