<?php

namespace Space48\Bigcommerce\Requests\CheckoutToken;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * checkout-token
 *
 * Use the checkout token to display a confirmation page for a guest shopper.
 * **Usage Notes** * The
 * response from performing this POST request is a checkout token. * The checkout token is a single-use
 * token that is not order-dependent. You cannot create this token after finalizing an order. * After
 * completing the order, you can redirect the shopper to
 * /order-confirmation/{orderId}?t={checkoutToken}. * After token validation, the
 * /order-confirmation/{orderId} page displays. * The `ORDER_TOKEN` should match the order or the
 * logged-in customer can access the order.
 */
class CheckoutToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/token";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
