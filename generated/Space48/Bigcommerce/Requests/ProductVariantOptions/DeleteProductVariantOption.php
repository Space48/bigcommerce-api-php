<?php

namespace Space48\Bigcommerce\Requests\ProductVariantOptions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProductVariantOption
 *
 * Deletes a *Variant Option*.
 */
class DeleteProductVariantOption extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/options/{$this->optionId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 */
	public function __construct(
		protected int $productId,
		protected int $optionId,
	) {
	}
}
