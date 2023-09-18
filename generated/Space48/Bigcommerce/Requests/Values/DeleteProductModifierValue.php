<?php

namespace Space48\Bigcommerce\Requests\Values;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProductModifierValue
 *
 * Deletes a *Modifier Value*.
 */
class DeleteProductModifierValue extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/modifiers/{$this->modifierId}/values/{$this->valueId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 * @param int $modifierId The ID of the `Modifier`.
	 */
	public function __construct(
		protected int $productId,
		protected int $modifierId,
		protected int $valueId,
	) {
	}
}
