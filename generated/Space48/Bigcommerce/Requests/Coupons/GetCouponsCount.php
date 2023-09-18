<?php

namespace Space48\Bigcommerce\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCouponsCount
 *
 * Returns a count of all *Coupons* in the store.
 */
class GetCouponsCount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/coupons/count";
	}


	public function __construct()
	{
	}
}
