<?php

namespace Space48\Bigcommerce\Requests\Checkout;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCheckout
 *
 * Returns a *Checkout*.
 *
 * **Notes**
 *
 * The cart ID and checkout ID are the same.
 */
class GetCheckout extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param null|string $include * `cart.line_items.physical_items.options` - physical options
	 * * `cart.line_items.digital_items.options` - digital options
	 * * `consignments.available_shipping_options` - shipping options
	 * * `promotions.banners` - promotion options
	 */
	public function __construct(
		protected string $checkoutId,
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
