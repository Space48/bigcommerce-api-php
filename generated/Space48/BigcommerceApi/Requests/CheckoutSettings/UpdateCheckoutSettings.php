<?php

namespace Space48\BigcommerceApi\Requests\CheckoutSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateCheckoutSettings
 *
 * Update checkout settings
 */
class UpdateCheckoutSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/checkouts/settings";
	}


	public function __construct()
	{
	}
}
