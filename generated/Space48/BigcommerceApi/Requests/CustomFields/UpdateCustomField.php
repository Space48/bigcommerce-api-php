<?php

namespace Space48\BigcommerceApi\Requests\CustomFields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCustomField
 *
 * Updates a *Custom Field*.
 *
 * **Required Fields**
 * - none
 *
 * **Read-Only**
 * - id
 */
class UpdateCustomField extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/custom-fields/{$this->customFieldId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 */
	public function __construct(
		protected int $productId,
		protected int $customFieldId,
	) {
	}
}
