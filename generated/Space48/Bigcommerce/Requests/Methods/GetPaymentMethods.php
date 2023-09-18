<?php

namespace Space48\Bigcommerce\Requests\Methods;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPaymentMethods
 *
 * Returns a list of accepted payment methods based on the `order_id` or `checkout_id`.
 *
 * **Notes**
 * *
 * Use the [Create an Order](/docs/rest-management/orders#create-an-order) endpoint to generate the
 * `order_id`.
 * * Orders created will be set to incomplete order status.
 * * The cart ID and checkout ID
 * are the same.
 *
 * **Required Fields**
 * * `order_id` or `checkout_id`
 */
class GetPaymentMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/payments/methods";
	}


	/**
	 * @param null|int $orderId Identifier for the order
	 * @param null|string $checkoutId Identifier for the checkout (same as the cart ID)
	 */
	public function __construct(
		protected ?int $orderId = null,
		protected ?string $checkoutId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['order_id' => $this->orderId, 'checkout_id' => $this->checkoutId]);
	}
}
