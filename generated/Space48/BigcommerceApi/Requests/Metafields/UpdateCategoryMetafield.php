<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCategoryMetafield
 *
 * Updates a *Category Metafield*.
 *
 * **Required Fields**
 * * none
 *
 * **Read-Only Fields**
 * * id
 * * These
 * fields can only be modified by the app (API credentials) that created the metafield:
 * 	* namespace
 * 	*
 * key
 * 	* permission_set
 *
 * **Usage Notes**
 * * Attempting to modify `namespace`, `key`, and
 * `permission_set` fields using a client ID different from the one used to create those metafields
 * will result in a 403 error message.
 */
class UpdateCategoryMetafield extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $categoryId,
		protected int $metafieldId,
	) {
	}
}
