<?php

namespace Space48\Bigcommerce\Requests\CartItems;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * addCartLineItem
 *
 * Adds a line items to the *Cart*.
 *
 *
 * > #### Note
 * > * Substitute your storefront domain for
 * `yourstore.example.com`.
 * > * The Send a Test Request feature is not currently supported for this
 * endpoint.
 */
class AddCartLineItem extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/items";
	}


	/**
	 * @param string $cartId This cart's unique ID.
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
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include' => $this->include];
	}
}
