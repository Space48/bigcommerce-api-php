<?php

namespace Space48\Bigcommerce\Requests\CheckoutConsignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCheckoutConsignment
 *
 * Removes an existing consignment from a checkout.
 *
 * Removing the last consignment will remove the cart
 * from the customer it is assigned to. Create a new redirect URL for the customer so they can access
 * the cart again.
 */
class DeleteCheckoutConsignment extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/consignments/{$this->consignmentId}";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $consignmentId
	 */
	public function __construct(
		protected string $checkoutId,
		protected string $consignmentId,
	) {
	}
}
