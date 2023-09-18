<?php

namespace Space48\Bigcommerce\Requests\ProductModifiers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductModifier
 *
 * Creates a *Product Modifier*.
 *
 * **Required Fields**
 * * `required`
 * * `display_name`
 * *
 * `type`
 *
 * **Read-Only Fields**
 * * `id`
 *
 * **Notes**
 * It takes two separate requests to create a new
 * checkbox modifier with option values. Perform a request to create a modifier, then perform a second
 * request to update option values.
 */
class CreateProductModifier extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/modifiers";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
