<?php

namespace Space48\Bigcommerce\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProduct
 *
 * Deletes a *Product*.
 */
class DeleteProduct extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
