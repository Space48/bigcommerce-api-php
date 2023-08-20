<?php

namespace Space48\BigcommerceApi\Requests\PaymentActions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * RefundID_Get
 *
 * Returns a refund by refund ID.
 */
class RefundIdGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/payment_actions/refunds/{$this->refundId}";
	}


	/**
	 * @param int $refundId Refund ID.
	 */
	public function __construct(
		protected int $refundId,
	) {
	}
}
