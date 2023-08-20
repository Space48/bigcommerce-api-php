<?php

namespace Space48\BigcommerceApi\Requests\Values;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOptionValues
 *
 * Returns a list of all *Variant Option Values*. Optional parameters can be passed in.
 */
class GetOptionValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/options/{$this->optionId}/values";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $optionId The ID of the `Option`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected int $optionId,
		protected string $includeFields,
		protected string $excludeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields];
	}
}
