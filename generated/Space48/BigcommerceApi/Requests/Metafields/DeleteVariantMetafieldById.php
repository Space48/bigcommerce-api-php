<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteVariantMetafieldById
 *
 * Deletes a product variant *Metafield*.
 */
class DeleteVariantMetafieldById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/variants/{$this->variantId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param int $metafieldId The ID of the `Metafield`.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $productId,
		protected int $variantId,
		protected int $metafieldId,
	) {
	}
}
