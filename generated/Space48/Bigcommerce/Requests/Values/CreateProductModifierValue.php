<?php

namespace Space48\Bigcommerce\Requests\Values;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductModifierValue
 *
 * Creates a *Modifier Value*.
 *
 * **Required Fields**
 * * label
 * * sort_order
 *
 * **Read-Only Fields**
 * * id
 */
class CreateProductModifierValue extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/modifiers/{$this->modifierId}/values";
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
