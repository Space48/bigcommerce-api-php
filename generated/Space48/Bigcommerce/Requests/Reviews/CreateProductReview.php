<?php

namespace Space48\Bigcommerce\Requests\Reviews;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductReview
 *
 * Creates a *Product Review*.
 *
 * **Required Fields**
 * - title
 * - date_reviewed
 *
 * **Read-Only Fields**
 * * id
 */
class CreateProductReview extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/reviews";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
