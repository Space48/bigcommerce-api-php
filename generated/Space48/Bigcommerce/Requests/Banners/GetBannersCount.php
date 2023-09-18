<?php

namespace Space48\Bigcommerce\Requests\Banners;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBannersCount
 *
 * Returns a count of *Banners*.
 */
class GetBannersCount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/banners/count";
	}


	public function __construct()
	{
	}
}
