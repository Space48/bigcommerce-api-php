<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductMetafield
 *
 * Creates a *Product Metafield*.
 *
 * **Required Fields:**
 * * permission_set
 * * namespace
 * * key
 * *
 * value
 *
 * **Note:** The maxiumum number of metafields allowed on each order, product, category,
 * variant, or brand is 250 per client ID. For more information, see [Platform
 * Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.
 */
class CreateProductMetafield extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/metafields";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
