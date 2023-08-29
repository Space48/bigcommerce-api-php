<?php

namespace Space48\Bigcommerce\Requests\PaymentActions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * postrefundquotes
 *
 * Calculate the tax amount, total refund amount and get available payment options for an order refund
 * by providing items and costs or quantities to refund.
 *
 * This endpoint will accept a batch of one or
 * more.
 *
 * Requires at least one of the following scopes:
 * * `store_v2_orders`
 * * `store_v2_transactions`
 */
class Postrefundquotes extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/stores/{$this->storeHash}/v3/orders/payment_actions/refund_quotes";
	}


	/**
	 * @param string $storeHash
	 */
	public function __construct(
		protected string $storeHash,
	) {
	}
}
