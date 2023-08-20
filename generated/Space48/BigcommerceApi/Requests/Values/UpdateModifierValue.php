<?php

namespace Space48\BigcommerceApi\Requests\Values;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateModifierValue
 *
 * Updates a *Modifier Value*.
 *
 * **Required Fields**
 * * none
 *
 * **Read-Only Fields**
 * * id
 */
class UpdateModifierValue extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/modifiers/{$this->modifierId}/values/{$this->valueId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 */
	public function __construct(
		protected int $productId,
		protected int $modifierId,
		protected int $valueId,
	) {
	}
}
