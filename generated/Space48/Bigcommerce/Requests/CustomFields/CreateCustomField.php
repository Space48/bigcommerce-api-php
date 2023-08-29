<?php

namespace Space48\Bigcommerce\Requests\CustomFields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCustomField
 *
 * Creates a *Custom Field*.
 *
 * **Required Fields:**
 * - name
 * - value
 *
 * **Read-Only:**
 * - id
 *
 * **Limits**
 * -
 * 200 custom fields per product limit.
 * - 255 characters per custom field limit.
 */
class CreateCustomField extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/custom-fields";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
