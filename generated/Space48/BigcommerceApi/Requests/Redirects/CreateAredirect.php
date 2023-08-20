<?php

namespace Space48\BigcommerceApi\Requests\Redirects;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createARedirect
 *
 * Creates a *Redirect URL*.
 *
 * **Required Fields**
 * *   path
 * *   forward
 *
 * **Read Only**
 * *   url
 *
 *
 * > ####
 * Warning
 * > **Deprecated**
 * > * This API operation is deprecated. Avoid using this API operation if
 * possible. It will be removed in a future version.
 * > * To upsert new redirect data, use Redirects
 * V3ʼs [Upsert redirects](/docs/rest-management/redirects#upsert-redirects) endpoint.
 */
class CreateAredirect extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/redirects";
	}


	public function __construct()
	{
	}
}
