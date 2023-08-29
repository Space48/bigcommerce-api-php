<?php

namespace Space48\Bigcommerce\Requests\CartItems;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCartLineItem
 *
 * Updates a *Cart* line item. Updates an existing, single line item quantity and the price of custom
 * items in a cart.
 *
 * If a modified product or variant needs to be changed or updated, you can remove
 * and re-add the product to the cart with the correct variants using the [Delete Cart Line
 * Item](/docs/rest-storefront/carts/cart-items#delete-cart-line-item) and the [Add Cart Line
 * Items](/docs/rest-storefront/carts/cart-items#add-cart-line-items) endpoints. You can also use carts
 * mutations that are part of the [GraphQL Storefront
 * API](/api-docs/storefront/graphql/carts-and-checkout).
 *
 *
 * > #### Note
 * > * Substitute your storefront
 * domain for `yourstore.example.com`.
 * > * The Send a Test Request feature is not currently supported
 * for this endpoint.
 */
class UpdateCartLineItem extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/items/{$this->itemId}";
	}


	/**
	 * @param string $cartId This cart's unique ID.
	 * @param string $itemId This item's ID.
	 * @param string $include To return product options add one of the following include:
	 *
	 * `lineItems.physicalItems.options`: The Cart returns an abbreviated result. Use this to return physical items product options. Can also be used in a /POST to have the extended Cart object return.
	 *
	 * `lineItems.digitalItems.options`:  The Cart returns an abbreviated result. Use this to return digital items product options.  Can also be used in a /POST to have the extended Cart object return.
	 *
	 * `lineItems.digitalItems.options,lineItems.physicalItems.options`:  The Cart returns an abbreviated result. Use this to return digital and physical options. Can also be used in a /POST to have the extended Cart object return.
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
