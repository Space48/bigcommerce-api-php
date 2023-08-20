<?php

namespace Space48\BigcommerceApi\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACountOfCoupons
 *
 * Returns a count of all *Coupons* in the store.
 */
class GetAcountOfCoupons extends Request
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
