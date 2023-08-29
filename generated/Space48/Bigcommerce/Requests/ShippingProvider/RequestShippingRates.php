<?php

namespace Space48\Bigcommerce\Requests\ShippingProvider;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * requestShippingRates
 *
 * Request shipping rates. BigCommerce sends a request for shipping quotes to the shipping provider
 * URL. The shipping provider responds with shipping quotes.
 *
 * > #### Note
 * > * Substitute the host and
 * path specific to the shipping provider for `your_app.example.com` and `rate`.
 * > * The Send a Test
 * Request feature is not currently supported for this endpoint.
 */
class RequestShippingRates extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rate";
	}


	public function __construct()
	{
	}
}
