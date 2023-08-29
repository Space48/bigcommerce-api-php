<?php

namespace Space48\Bigcommerce\Requests\ShippingProvider;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * validateConnectionOptions
 *
 * Validate connection options. BigCommerce sends a request to the shipping provider URL to check a
 * merchantʼs connection credentials. The shipping provider sends a response indicating whether a
 * merchant has valid credentials.
 *
 * > #### Note
 * > * Substitute the host and path specific to the
 * shipping provider for `your_app.example.com` and `check_connection_options`.
 * > * The Send a Test
 * Request feature is not currently supported for this endpoint.
 */
class ValidateConnectionOptions extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/check_connection_options";
	}


	public function __construct()
	{
	}
}
