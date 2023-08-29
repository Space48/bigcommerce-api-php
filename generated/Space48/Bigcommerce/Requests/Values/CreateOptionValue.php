<?php

namespace Space48\Bigcommerce\Requests\Values;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createOptionValue
 *
 * Creates a *Variant Option Value*.
 *
 * **Required Fields**
 * * label
 * * sort_order
 *
 * **Read-Only Fields**
 * *
 * id
 *
 * **Limits**
 * * 250 option values per option limit.
 */
class CreateOptionValue extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/options/{$this->optionId}/values";
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
