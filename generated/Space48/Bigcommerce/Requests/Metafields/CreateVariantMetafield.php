<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createVariantMetafield
 *
 * Creates a product variant *Metafield*.
 *
 * **Required Fields:**
 * * permission_set
 * * namespace
 * * key
 * *
 * value
 *
 * **Read-Only Fields**
 * * id
 *
 * **Note:** The maxiumum number of metafields allowed on each order,
 * product, category, variant, or brand is 250 per client ID. For more information, see [Platform
 * Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.
 */
class CreateVariantMetafield extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/variants/{$this->variantId}/metafields";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function __construct(
		protected int $productId,
		protected int $variantId,
	) {
	}
}
