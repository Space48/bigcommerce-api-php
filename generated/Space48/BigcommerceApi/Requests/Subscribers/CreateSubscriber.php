<?php

namespace Space48\BigcommerceApi\Requests\Subscribers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createSubscriber
 *
 * Creates a *Subscriber*.
 *
 * **Required Fields**
 * * email
 *
 * **Read Only Fields**
 * * id
 */
class CreateSubscriber extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customers/subscribers";
	}


	public function __construct()
	{
	}
}
