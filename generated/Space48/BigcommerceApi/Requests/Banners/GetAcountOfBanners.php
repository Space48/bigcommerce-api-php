<?php

namespace Space48\BigcommerceApi\Requests\Banners;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACountOfBanners
 *
 * Returns a count of *Banners*.
 */
class GetAcountOfBanners extends Request
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
