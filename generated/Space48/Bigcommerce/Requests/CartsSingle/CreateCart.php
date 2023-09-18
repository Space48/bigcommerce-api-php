<?php

namespace Space48\Bigcommerce\Requests\CartsSingle;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCart
 *
 * Creates a **Cart**.
 *
 * **Required Fields**
 *
 * |Field|Details|
 * |-|-|
 * |`line_item`|Specifies a line
 * item.|
 * |`custom_items`|Specifies a custom item. Only required if adding a custom item to the
 * cart.|
 * |`gift_certificates`|Specifies a gift certificate. Only required if adding a gift certificate
 * to the cart.|
 *
 * **Usage Notes**
 *
 * * A **cart** `id` (UUID) is returned in the response.
 * * A **cart**
 * `id` is the same as a **checkout** `id`.
 * * A cart can be created by adding an existing **catalog
 * item** or a **custom item**.
 * * Carts are valid for **30 days** from the **last modification** (this
 * includes creating the cart or editing the cart).
 * * If a product has modifiers, use the
 * `option_selections` array to describe the **modifier** selection(s).
 * * The format and data type of a
 * cart’s `option_value` are defined by the `value_data` object of a product’s [variant option
 * value](/docs/rest-catalog/product-variant-options/values), [modifier
 * value](/docs/rest-catalog/product-modifiers/values), or a combination of both.
 * * Redirect URLs can
 * only be generated from carts that were created using the **REST Management API**.
 * * To get cart
 * `redirect_urls` in the response, append the following query parameter to the request URL:
 * `include=redirect_urls`. Redirect URLs point to either a shared checkout domain or a
 * channel-specific domain, depending on the storefront configuration.
 * * To restore a cart that was
 * created by a shopper or through a Storefront API, first recreate the cart using the **REST
 * Management API**.
 * * To get cart `promotions` in the response, append the following query parameter
 * to the request URL: `include=promotions.banners`.
 */
class CreateCart extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/carts";
	}


	/**
	 * @param null|string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function __construct(
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
