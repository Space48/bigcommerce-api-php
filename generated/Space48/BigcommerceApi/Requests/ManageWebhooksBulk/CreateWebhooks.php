<?php

namespace Space48\BigcommerceApi\Requests\ManageWebhooksBulk;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createWebhooks
 *
 * Creates a webhook. Only one webhook at a time can be created. Custom headers can be added.
 * Destination URL must be served on port 443 (custom ports are not currently supported).
 */
class CreateWebhooks extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/hooks";
	}


	public function __construct()
	{
	}
}
