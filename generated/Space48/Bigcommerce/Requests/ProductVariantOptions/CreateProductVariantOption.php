<?php

namespace Space48\Bigcommerce\Requests\ProductVariantOptions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductVariantOption
 *
 * Creates a *Variant Option*.
 *
 * **Required Fields**
 * * display_name
 * * type
 * * option_values
 *
 * **Read-Only
 * Fields**
 * * id
 *
 * **Limits**
 * * 255 characters option name length.
 *
 * **Notes**
 *
 * * Only one variant option
 * at a time can be created; individual variant options will contain an array of multiple values.
 * *
 * There are several examples listed below that create options, but the SKUs are not updated and they
 * are not a variant on the product. Variant SKUs must be created with a separate request.
 * * Variant
 * options will show on the storefront as an option that can be selected by the customer. A request
 * like this could be used to add new choices to a variant that has already been created.
 * * If more
 * than one variant needs to be created, use the [Create a
 * Product](/docs/rest-catalog/products#create-a-product) endpoint.
 */
class CreateProductVariantOption extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/options";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
