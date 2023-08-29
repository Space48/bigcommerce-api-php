<?php

namespace Space48\Bigcommerce\Requests\OrderCoupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllOrderCoupons
 *
 * Lists all order coupons. Optional parameters can be passed in.
 *
 * |Type `int`|Type
 * Name|
 * |-|-|
 * |`0`|`per_item_discount`|
 * |`1`|`percentage_discount`|
 * |`2`|`per_total_discount`|
 * |`3`|`shipping_discount`|
 * |`4`|`free_shipping`|
 * |`5`|`promotion`|
 */
class GetAllOrderCoupons extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/coupons";
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
