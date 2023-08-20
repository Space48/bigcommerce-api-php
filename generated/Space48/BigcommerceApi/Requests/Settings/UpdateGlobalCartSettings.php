<?php

namespace Space48\BigcommerceApi\Requests\Settings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateGlobalCartSettings
 *
 * Update the global cart settings of a store.
 */
class UpdateGlobalCartSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/carts/settings";
	}


	public function __construct()
	{
	}
}
