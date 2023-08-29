<?php

namespace Space48\Bigcommerce\Requests\CheckoutCartItems;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CheckoutsCartsItemsItemIdByCheckoutIdAndCartIdPut
 *
 * Updates a *Checkout Line Item*. Updates an existing, single line item in the cart.
 *
 * If a variant
 * needs to be changed or updated, the product will need to be removed and re-added to the cart with
 * the correct variants using the [Add Cart Line
 * Items](/docs/rest-storefront/carts/cart-items#add-cart-line-items) endpoint or the [GraphQL
 * Storefront API](/api-docs/storefront/graphql/carts-and-checkout).
 *
 * > #### Note
 * > * Substitute your
 * storefront domain for `yourstore.example.com`.
 * > * The Send a Test Request feature is not currently
 * supported for this endpoint.
 */
class CheckoutsCartsItemsItemIdByCheckoutIdAndCartIdPut extends Request
{
	protected Method $method = Method::PUT;


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
