<?php

namespace Space48\Bigcommerce\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAListofRedirects
 *
 * Returns a list all *Redirect URLs*.
 *
 * > #### Warning
 * > **Deprecated**
 * > * This API operation is
 * deprecated. Avoid using this API operation if possible. It will be removed in a future version.
 * > *
 * To get redirect URLs, use Redirects V3ʼs [Get
 * redirects](/docs/rest-management/redirects#get-redirects) endpoint.
 */
class GetAlistofRedirects extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/redirects";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
