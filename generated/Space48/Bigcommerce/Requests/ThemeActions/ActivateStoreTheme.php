<?php

namespace Space48\Bigcommerce\Requests\ThemeActions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * activateStoreTheme
 *
 * Actives a store *Theme*.
 *
 * This returns a 204 response upon success.
 */
class ActivateStoreTheme extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/themes/actions/activate";
	}


	public function __construct()
	{
	}
}
