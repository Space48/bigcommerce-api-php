<?php

namespace Space48\Bigcommerce\Requests\CheckoutConsignments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * addCheckoutConsignment
 *
 * Adds a new consignment to a checkout.
 *
 * For more information about working with consignments, see
 * [Checkout consignment](/api-docs/checkouts/checkout-consignment).
 *
 * Though the only required
 * `address` properties to create a consignment are `email` and `country_code`, to successfully [create
 * an order](/docs/rest-management/checkouts/checkout-orders#create-an-order) the `address` requires
 * the following properties:
 * * `first_name`
 * * `last_name`
 * * `address1`
 * * `city`
 * * `country`
 * * `email`
 * *
 * `country_code`
 *
 * Depending on the country, the following `address` properties may also be
 * required:
 *
 * * `postal_code`
 * * `state_or_province`
 */
class AddCheckoutConsignment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/consignments";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param null|string $include
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
