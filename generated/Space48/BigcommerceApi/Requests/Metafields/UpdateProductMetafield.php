<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProductMetafield
 *
 * Updates a *Product Metafield*.
 *
 * **Required Fields**
 * * none
 *
 * **Read-Only Fields**
 * * id
 * * These fields
 * can only be modified using the API account that created the metafield:
 * 	* `namespace`
 * 	* `key`
 * 	*
 * `permission_set`
 * 	* `value`
 *
 * **Usage Notes**
 * * Attempting to modify the `namespace`, `key`,
 * `permission_set`, or `value` field using an API account different from the one used to create those
 * metafields will result in a `403` error message.
 */
class UpdateProductMetafield extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $productId,
		protected int $metafieldId,
	) {
	}
}
