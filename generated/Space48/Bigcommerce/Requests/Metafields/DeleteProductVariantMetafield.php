<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProductVariantMetafield
 *
 * Deletes a product variant *Metafield*.
 */
class DeleteProductVariantMetafield extends Request
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
	 */
	public function __construct(
		protected int $productId,
		protected int $variantId,
		protected int $metafieldId,
	) {
	}
}
