<?php

namespace Space48\BigcommerceApi\Requests\PaymentActions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * paymentactionvoid
 *
 * Void the payment for an order. When there are no payment method validation issues, the void process
 * is successful, the `payment_status` updates to `void pending`, and the void payment request is
 * scheduled. The payment request itself occurs asynchronously.
 *
 * Requires at least one of the following
 * scopes:
 * * `store_v2_orders`
 * * `store_v2_transactions`
 */
class Paymentactionvoid extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/payment_actions/void";
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
