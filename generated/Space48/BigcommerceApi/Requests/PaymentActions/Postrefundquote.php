<?php

namespace Space48\BigcommerceApi\Requests\PaymentActions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * postrefundquote
 *
 * Calculate the tax amount, total refund amount and get available payment options for an order refund
 * by providing items and costs or quantities to refund.
 *
 * Requires at least one of the following
 * scopes:
 * * `store_v2_orders`
 * * `store_v2_transactions`
 *
 * **Note:**
 * Order refunds are processed
 * consecutively. Processing synchronous refunds on an order are not yet supported.
 */
class Postrefundquote extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/payment_actions/refund_quotes";
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
