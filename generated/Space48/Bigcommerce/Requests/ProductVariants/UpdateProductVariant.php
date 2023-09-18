<?php

namespace Space48\Bigcommerce\Requests\ProductVariants;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProductVariant
 *
 * Updates a product *Variant*.
 */
class UpdateProductVariant extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/variants/{$this->variantId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function __construct(
		protected int $productId,
		protected int $variantId,
	) {
	}
}
