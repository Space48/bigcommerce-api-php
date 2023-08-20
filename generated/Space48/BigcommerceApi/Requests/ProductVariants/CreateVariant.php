<?php

namespace Space48\BigcommerceApi\Requests\ProductVariants;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createVariant
 *
 * Creates a *Product Variant*.
 *
 * **Required Fields**
 * * sku
 * * option_values
 *
 * **Read-Only Fields**
 * *
 * id
 *
 * **Limits**
 * * 600 SKUs per product limit.
 * * 255 characters SKU length limit.
 *
 * Variants need to be
 * created one at a time using this endpoint. To use a variant array and create products and variants
 * in the same call use the [Create Products](/docs/rest-catalog/products#create-a-product) during the
 * initial product creation.
 */
class CreateVariant extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/variants";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
