<?php

namespace Space48\Bigcommerce\Requests\ComplexRules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProductComplexRules
 *
 * Returns a list of all product *Complex Rules*. Optional parameters may be passed in.
 */
class GetProductComplexRules extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/complex-rules";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields]);
	}
}
