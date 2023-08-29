<?php

namespace Space48\Bigcommerce\Requests\CustomFields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomFieldById
 *
 * Returns a single *Custom Field*. Optional parameters can be passed in.
 */
class GetCustomFieldById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/custom-fields/{$this->customFieldId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 * @param int $customFieldId The ID of the `CustomField`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected int $customFieldId,
		protected string $includeFields,
		protected string $excludeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields];
	}
}
