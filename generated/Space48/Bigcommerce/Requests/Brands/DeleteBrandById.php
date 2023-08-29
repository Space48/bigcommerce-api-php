<?php

namespace Space48\Bigcommerce\Requests\Brands;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteBrandById
 *
 * Deletes a *Brand*.
 */
class DeleteBrandById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands/{$this->brandId}";
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 */
	public function __construct(
		protected int $brandId,
	) {
	}
}
