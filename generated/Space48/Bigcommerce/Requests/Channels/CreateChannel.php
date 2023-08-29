<?php

namespace Space48\Bigcommerce\Requests\Channels;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createChannel
 *
 * Creates a *Channel*.
 */
class CreateChannel extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/channels";
	}


	public function __construct()
	{
	}
}
