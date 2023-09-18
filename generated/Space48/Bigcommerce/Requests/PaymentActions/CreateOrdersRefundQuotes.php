<?php

namespace Space48\Bigcommerce\Requests\PaymentActions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createOrdersRefundQuotes
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
class CreateOrdersRefundQuotes extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/payment_actions/refund_quotes";
	}


	public function __construct()
	{
	}
}
