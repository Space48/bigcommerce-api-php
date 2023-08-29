<?php

namespace Space48\Bigcommerce\Requests\CheckoutSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCheckoutSettings
 *
 * Get checkout settings
 */
class GetCheckoutSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/checkouts/settings";
	}


	public function __construct()
	{
	}
}
