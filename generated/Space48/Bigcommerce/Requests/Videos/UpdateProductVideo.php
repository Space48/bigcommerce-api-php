<?php

namespace Space48\Bigcommerce\Requests\Videos;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProductVideo
 *
 * Updates a *Product Video.
 *
 * **Required Fields**
 * * none
 *
 * **Read-Only Fields**
 * * id
 */
class UpdateProductVideo extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/videos/{$this->id}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $id The BigCommerce ID of the `Video`
	 */
	public function __construct(
		protected int $productId,
		protected int $id,
	) {
	}
}
