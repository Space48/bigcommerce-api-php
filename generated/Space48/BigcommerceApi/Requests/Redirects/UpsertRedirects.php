<?php

namespace Space48\BigcommerceApi\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpsertRedirects
 *
 * Upserts new redirect data across all storefronts.
 */
class UpsertRedirects extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/storefront/redirects";
	}


	public function __construct()
	{
	}
}
