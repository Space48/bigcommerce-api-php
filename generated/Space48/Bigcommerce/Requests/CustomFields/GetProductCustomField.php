<?php

namespace Space48\Bigcommerce\Requests\CustomFields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProductCustomField
 *
 * Returns a single *Custom Field*. Optional parameters can be passed in.
 */
class GetProductCustomField extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/custom-fields/{$this->customFieldId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected int $customFieldId,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields]);
	}
}
