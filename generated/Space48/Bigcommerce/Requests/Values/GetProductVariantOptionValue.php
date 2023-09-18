<?php

namespace Space48\Bigcommerce\Requests\Values;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProductVariantOptionValue
 *
 * Returns a single *Variant Option Value*. Optional parameters can be passed in.
 */
class GetProductVariantOptionValue extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/options/{$this->optionId}/values/{$this->valueId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 * @param int $optionId The ID of the `Option`.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected int $optionId,
		protected int $valueId,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields]);
	}
}
