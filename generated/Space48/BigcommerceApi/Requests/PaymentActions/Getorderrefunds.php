<?php

namespace Space48\BigcommerceApi\Requests\PaymentActions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getorderrefunds
 *
 * Returns a list of refunds ordered by refund ID in ascending order for the given order.
 *
 * Requires at
 * least one of the following scopes:
 * * `store_v2_transactions_read_only`
 * * `store_v2_transactions`
 * *
 * `store_v2_orders_read_only`
 * * `store_v2_orders`
 */
class Getorderrefunds extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/payment_actions/refunds";
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
