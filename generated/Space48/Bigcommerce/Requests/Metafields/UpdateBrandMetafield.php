<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateBrandMetafield
 *
 * Updates a *Brand Metafield*.
 *
 * **Required Fields**
 * * none
 *
 * **Read-Only Fields**
 * * id
 * * These fields
 * can only be modified by the app (API credentials) that created the metafield:
 * 	* namespace
 * 	* key
 * 	*
 * permission_set
 *
 * **Usage Notes**
 * * Attempting to modify `namespace`, `key`, and `permission_set`
 * fields using a client ID different from the one used to create those metafields will result in a 403
 * error message.
 * * The maxiumum number of metafields allowed on each order, product, category,
 * variant, or brand is 250 per client ID. For more information, see [Platform
 * Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.
 */
class UpdateBrandMetafield extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands/{$this->brandId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $brandId,
		protected int $metafieldId,
	) {
	}
}
