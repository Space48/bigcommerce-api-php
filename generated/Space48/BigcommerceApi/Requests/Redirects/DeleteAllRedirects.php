<?php

namespace Space48\BigcommerceApi\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllRedirects
 *
 * By default, it deletes all *Redirect URLs* in a store.
 *
 *
 * > #### Warning
 * > **Deprecated**
 * > * This
 * API operation is deprecated. Avoid using this API operation if possible. It will be removed in a
 * future version.
 * > * To delete redirect URLs, use Redirects V3ʼs [Delete
 * redirects](/docs/rest-management/redirects#delete-redirects) endpoint.
 */
class DeleteAllRedirects extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/redirects";
	}


	public function __construct()
	{
	}
}
