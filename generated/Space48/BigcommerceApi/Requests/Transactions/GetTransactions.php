<?php

namespace Space48\BigcommerceApi\Requests\Transactions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getTransactions
 *
 * Returns an **order's** transactions.
 *
 * **Usage Notes**
 * * Depending on the payment method, different
 * information will be available (not all payment gateways return full card or fraud
 * detail).
 *
 *
 * Requires at least one of the following scopes:
 * * `store_v2_transactions_read_only`
 * *
 * `store_v2_transactions`
 */
class GetTransactions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/transactions";
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
