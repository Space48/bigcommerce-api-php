<?php

namespace Space48\BigcommerceApi\Requests\Values;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteOptionValueById
 *
 * Deletes a *Variant Option Value*.
 */
class DeleteOptionValueById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/options/{$this->optionId}/values/{$this->valueId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 * @param int $optionId The ID of the `Option`.
	 */
	public function __construct(
		protected int $productId,
		protected int $optionId,
		protected int $valueId,
	) {
	}
}
