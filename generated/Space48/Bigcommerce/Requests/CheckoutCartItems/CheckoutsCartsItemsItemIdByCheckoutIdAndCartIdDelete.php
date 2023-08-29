<?php

namespace Space48\Bigcommerce\Requests\CheckoutCartItems;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CheckoutsCartsItemsItemIdByCheckoutIdAndCartIdDelete
 *
 * Deletes a *Line Item* from the *Cart*.
 *
 * > #### Note
 * > * Substitute your storefront domain for
 * `yourstore.example.com`.
 * > * The Send a Test Request feature is not currently supported for this
 * endpoint.
 */
class CheckoutsCartsItemsItemIdByCheckoutIdAndCartIdDelete extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/carts/{$this->cartId}/items/{$this->itemId}";
	}


	/**
	 * @param string $checkoutId
	 * @param string $cartId
	 * @param string $itemId
	 */
	public function __construct(
		protected string $checkoutId,
		protected string $cartId,
		protected string $itemId,
	) {
	}
}
