<?php

namespace Space48\BigcommerceApi\Requests\Settings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGlobalCartSettings
 *
 * Returns the global cart settings of a store.
 */
class GetGlobalCartSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/carts/settings";
	}


	public function __construct()
	{
	}
}
