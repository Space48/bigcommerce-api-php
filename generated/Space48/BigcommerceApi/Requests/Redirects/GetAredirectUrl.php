<?php

namespace Space48\BigcommerceApi\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getARedirectURL
 *
 * Returns a single *Redirect URL*.
 *
 * > #### Warning
 * > **Deprecated**
 * > * This API operation is
 * deprecated. Avoid using this API operation if possible. It will be removed in a future version.
 * > *
 * To get a redirect URL, use Redirects V3ʼs [Get
 * redirects](/docs/rest-management/redirects#get-redirects) endpoint.
 */
class GetAredirectUrl extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/redirects/{$this->id}";
	}


	/**
	 * @param int $id ID of the redirect URL.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
