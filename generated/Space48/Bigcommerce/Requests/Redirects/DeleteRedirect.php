<?php

namespace Space48\Bigcommerce\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteRedirect
 *
 * Deletes a *Redirect URL*.
 *
 * > #### Warning
 * > **Deprecated**
 * > * This API operation is deprecated.
 * Avoid using this API operation if possible. It will be removed in a future version.
 * > * To delete a
 * redirect URL, use Redirects V3ʼs [Delete
 * redirects](/docs/rest-management/redirects#delete-redirects) endpoint.
 */
class DeleteRedirect extends Request
{
	protected Method $method = Method::DELETE;


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
