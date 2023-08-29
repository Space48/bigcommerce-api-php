<?php

namespace Space48\Bigcommerce\Requests\Items;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCartLineItem
 *
 * Updates an existing, single line item in the *Cart*.
 *
 * **Notes**
 *
 * Currently, only updating
 * `list_price` and `quantity` are supported. Updating a product’s `list_price` will make that item
 * ineligible for V3 product-level promotions.
 *
 * If the product has modifiers, omit the `variant_id`
 * and instead use the `option_selections` array to describe both the **variant** and the **modifier**
 * selections.
 *
 * If a variant needs to be changed or updated, the product will need to be removed and
 * re-added to the cart with the correct variants using the **Add Cart Line Items**
 * endpoint.
 *
 * `custom_items` cannot be updated via the API at this time. To update your cart, add a new
 * updated custom item and delete the outdated one. If your cart contains only one line item, perform
 * the add operation before the delete operation.
 *
 * Deleting all line items from the cart will
 * invalidate the cart.
 */
class UpdateCartLineItem extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/items/{$this->itemId}";
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $itemId
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function __construct(
		protected string $cartId,
		protected string $itemId,
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include' => $this->include];
	}
}
