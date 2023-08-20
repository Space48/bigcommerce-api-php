<?php

namespace Space48\BigcommerceApi\Requests\Customers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createACustomer
 *
 * Create a *Customer*.
 *
 * > #### Note
 * > * Substitute your storefront domain for `yourstore.example.com`.
 *
 * > * The Send a Test Request feature is not currently supported for this endpoint.
 */
class CreateAcustomer extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customers";
	}


	public function __construct()
	{
	}
}
