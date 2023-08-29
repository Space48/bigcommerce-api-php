<?php

namespace Space48\Bigcommerce\Requests\Banners;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllBanners
 *
 * By default, it deletes all *Banners*.
 */
class DeleteAllBanners extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/banners";
	}


	public function __construct()
	{
	}
}
