<?php

namespace Space48\Bigcommerce\Requests\CartItems;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCartLineItem
 *
 * Deletes a *Cart* line item.
 *
 * Removing the last `line_item` in the *Cart* deletes the *Cart*.
 *
 * > ####
 * Note
 * > * Substitute your storefront domain for `yourstore.example.com`.
 * > * The Send a Test Request
 * feature is not currently supported for this endpoint.
 */
class DeleteCartLineItem extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/items/{$this->itemId}";
	}


	/**
	 * @param string $cartId This cart's unique ID.
	 * @param string $itemId The ID of the item to delete.
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
