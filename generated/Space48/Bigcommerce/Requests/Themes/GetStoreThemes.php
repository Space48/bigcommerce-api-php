<?php

namespace Space48\Bigcommerce\Requests\Themes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getStoreThemes
 *
 * Returns a list of store *Themes*.
 */
class GetStoreThemes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/themes";
	}


	public function __construct()
	{
	}
}
