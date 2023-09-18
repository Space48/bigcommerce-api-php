<?php

namespace Space48\Bigcommerce\Requests\Values;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProductModifierValues
 *
 * Returns a list of all product *Modifier Values*. Optional parameters can be passed in.
 */
class GetProductModifierValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/modifiers/{$this->modifierId}/values";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected int $modifierId,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields]);
	}
}
