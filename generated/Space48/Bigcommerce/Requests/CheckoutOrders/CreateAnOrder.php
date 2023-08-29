<?php

namespace Space48\Bigcommerce\Requests\CheckoutOrders;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createAnOrder
 *
 * Creates an order.
 *
 * ## Usage notes
 * * Orders created will be set to incomplete order status.
 * * You can
 * create as many orders from the same order (cart) as you want.
 * * Order duplication copies the
 * existing order, assigns a new order number, and sets the new order status to `incomplete`.
 * * Once
 * the order is paid, the cart is deleted.
 * * Cart deletion occurs if you are using BigCommerce to
 * accept payments on orders.
 */
class CreateAnOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/orders";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
