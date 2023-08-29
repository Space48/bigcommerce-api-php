<?php

namespace Space48\Bigcommerce\Requests\Brands;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateBrand
 *
 * Updates a *Brand*.
 *
 * **Required Fields**
 * - None
 *
 * **Read-Only Fields**
 * - id
 *
 * To update a *Brand
 * Image*, send a request with an `image_url`.
 */
class UpdateBrand extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands/{$this->brandId}";
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 */
	public function __construct(
		protected int $brandId,
	) {
	}
}
