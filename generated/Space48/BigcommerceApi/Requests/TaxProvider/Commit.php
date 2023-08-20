<?php

namespace Space48\BigcommerceApi\Requests\TaxProvider;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * commit
 *
 * Submit the quote request to be persisted by the enabled third-party tax provider. A commit operation
 * is intended to be submitted once only, when the Order has been confirmed and paid.
 *
 * > Server URL
 * > -
 * For supporting tax providers, the server URL contains the tax provider's profile field; for example,
 * `your_profile.example.com`.
 * > - The Try it feature is not currently supported for this endpoint.
 */
class Commit extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/commit";
	}


	public function __construct()
	{
	}
}
