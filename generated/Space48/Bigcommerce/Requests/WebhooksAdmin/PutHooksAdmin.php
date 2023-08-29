<?php

namespace Space48\Bigcommerce\Requests\WebhooksAdmin;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * putHooksAdmin
 *
 * Update email addresses that are sent notification emails when any domain associated with the API
 * account is denylisted or when a webhook is deactivated. Supports `upsert` functionality in the case
 * that no email address exists yet.
 */
class PutHooksAdmin extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/hooks/admin";
	}


	public function __construct()
	{
	}
}
