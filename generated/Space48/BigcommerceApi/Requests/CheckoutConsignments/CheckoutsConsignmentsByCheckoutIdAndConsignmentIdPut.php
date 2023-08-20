<?php

namespace Space48\BigcommerceApi\Requests\CheckoutConsignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CheckoutsConsignmentsByCheckoutIdAndConsignmentIdPut
 *
 * Updates an existing consignment. The address, line item IDs, and the shipping option ID can be
 * updated using this endpoint.
 *
 * To add a new address and shipping options with line items, complete
 * the following steps.
 *
 * 1. Add a new
 * [consignment](/docs/rest-management/checkouts/checkout-consignments#add-consignment-to-checkout) to
 * a checkout.
 *
 * 2. Assign a shipping option to the new consignment by sending a `PUT` request to
 * update the consignment's `shipping_option_id` with a returned value from
 * `data.consignments[N].available_shipping_option[N].id` obtained in Step One.
 */
class CheckoutsConsignmentsByCheckoutIdAndConsignmentIdPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/consignments/{$this->consignmentId}";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $consignmentId
	 * @param string $include Include to get available shipping options.
	 */
	public function __construct(
		protected string $checkoutId,
		protected string $consignmentId,
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include' => $this->include];
	}
}
