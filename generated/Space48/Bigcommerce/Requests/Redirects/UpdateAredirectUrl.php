<?php

namespace Space48\Bigcommerce\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateARedirectURL
 *
 * Updates a *Redirect URL*.
 *
 * **Required Fields**
 * *   path
 * *   forward
 *
 * **Read Only Fields**
 * *
 * url
 *
 *
 * > #### Warning
 * > **Deprecated**
 * > * This API operation is deprecated. Avoid using this API
 * operation if possible. It will be removed in a future version.
 * > * To update redirect data, use
 * Redirects V3ʼs [Upsert redirects](/docs/rest-management/redirects#upsert-redirects) endpoint.
 */
class UpdateAredirectUrl extends Request
{
	protected Method $method = Method::PUT;


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
