<?php

namespace Space48\BigcommerceApi\Requests\AbandonedCartsSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateGlobalAbandonedCartSettings
 *
 * Updates the global abandoned cart settings of a store.
 */
class UpdateGlobalAbandonedCartSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/abandoned-carts/settings";
	}


	public function __construct()
	{
	}
}
