<?php

namespace Space48\Bigcommerce\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACountOfRedirects
 *
 * Gets a count of *Redirect URLs* in a store.
 *
 * > #### Warning
 * > **Deprecated**
 * > * This API operation
 * is deprecated. Avoid using this API operation if possible. It will be removed in a future version.
 * >
 * * To get a count of redirects, use the `meta` object data returned with the Redirects V3ʼs [Get
 * redirects](/docs/rest-management/redirects#get-redirects) endpoint.
 */
class GetAcountOfRedirects extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/redirects/count";
	}


	public function __construct()
	{
	}
}
