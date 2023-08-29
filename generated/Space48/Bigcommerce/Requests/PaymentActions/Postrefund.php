<?php

namespace Space48\Bigcommerce\Requests\PaymentActions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * postrefund
 *
 * Creates a refund. When there are no payment method validation issues, the refund process is
 * successful and the refund payment request is scheduled. The payment request itself occurs
 * asynchronously.
 *
 * Requires at least one of the following scopes:
 * * `store_v2_orders`
 * *
 * `store_v2_transactions`
 *
 * **Note:**
 * Order refunds are processed consecutively. Processing synchronous
 * refunds on an order are not yet supported.
 */
class Postrefund extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
