<?php

namespace Space48\BigcommerceApi\Requests\CustomerGroups;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createACustomerGroup
 *
 * Creates a *Customer Group*.
 *
 * **Required Fields**
 * * name
 */
class CreateAcustomerGroup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customer_groups";
	}


	public function __construct()
	{
	}
}
