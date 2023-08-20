<?php

namespace Space48\BigcommerceApi\Requests\Products;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProduct
 *
 * Creates a *Product*. Only one product can be created at a time.
 *
 * **Required Fields:**
 * - `name`
 * -
 * `type`
 * - `weight`
 * - `price`
 *
 * **Read-Only Fields**
 * - `id`
 * - `date_created`
 * - `date_modified`
 * -
 * `calculated_price`
 * - `base_variant_id`
 *
 * **Limits**
 * - 250 characters product name length.
 *
 * **Usage
 * Notes**
 * * This endpoint accepts a `video` array. To create a product video that accepts a `video`
 * object, see [Create a Product Video](/docs/rest-catalog/products/videos#create-a-product-video) for
 * information.
 */
class CreateProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products";
	}


	/**
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 */
	public function __construct(
		protected string $includeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include_fields' => $this->includeFields];
	}
}
