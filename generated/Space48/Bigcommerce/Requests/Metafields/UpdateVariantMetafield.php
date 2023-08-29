<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateVariantMetafield
 *
 * Updates a product variant *Metafield*.
 *
 * **Required Fields:**
 * * none
 *
 * **Read-Only Fields**
 * * id
 * *
 * These fields can only be modified by the app (API credentials) that created the metafield:
 * 	*
 * namespace
 * 	* key
 * 	* permission_set
 *
 * **Usage Notes**
 * * Attempting to modify `namespace`, `key`, and
 * `permission_set` fields using a client ID different from the one used to create those metafields
 * will result in a 403 error message.
 */
class UpdateVariantMetafield extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/variants/{$this->variantId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $productId,
		protected int $variantId,
		protected int $metafieldId,
	) {
	}
}
