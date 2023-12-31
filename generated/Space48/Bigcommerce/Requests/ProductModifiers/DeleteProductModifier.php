<?php

namespace Space48\Bigcommerce\Requests\ProductModifiers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProductModifier
 *
 * Deletes a *Product Modifier*.
 */
class DeleteProductModifier extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/modifiers/{$this->modifierId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 */
	public function __construct(
		protected int $productId,
		protected int $modifierId,
	) {
	}
}
