<?php

namespace Space48\Bigcommerce\Requests\Items;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * addCartLineItems
 *
 * Adds line item to the *Cart*.
 *
 * **Usage Notes**
 *
 * To add a custom item use `custom_items`.
 *
 *
 * Overriding a product’s `list_price` will make that item ineligible for V3 product level
 * promotions.
 *
 * If a product has modifiers, omit the `variant_id` and instead use the
 * `option_selections` array to describe both the **variant** and the **modifier** selections.
 */
class AddCartLineItems extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/items";
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param null|string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function __construct(
		protected string $cartId,
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
