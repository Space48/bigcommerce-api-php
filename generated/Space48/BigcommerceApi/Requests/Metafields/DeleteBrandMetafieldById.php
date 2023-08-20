<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteBrandMetafieldById
 *
 * Deletes a *Brand Metafield*.
 */
class DeleteBrandMetafieldById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands/{$this->brandId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 * @param int $metafieldId The ID of the `Metafield`.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $brandId,
		protected int $metafieldId,
	) {
	}
}
