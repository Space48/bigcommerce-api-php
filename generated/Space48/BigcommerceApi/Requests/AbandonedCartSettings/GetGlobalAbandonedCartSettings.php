<?php

namespace Space48\BigcommerceApi\Requests\AbandonedCartSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGlobalAbandonedCartSettings
 *
 * Returns the global abandoned cart settings of a store.
 */
class GetGlobalAbandonedCartSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/abandoned-carts/settings";
	}


	public function __construct()
	{
	}
}
