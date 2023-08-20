<?php

namespace Space48\BigcommerceApi\Requests\Pages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateAPage
 *
 * Updates a *Page*. The request payload limit is 1MB.
 *
 * **Read Only Fields**
 * * id
 *
 * > #### Warning
 * >
 * **Deprecated**
 * > * This API operation is deprecated. Avoid using this API operation if possible. It
 * will be removed in a future version.
 * > * To update multiple pages, use Pages V3ʼs [Update
 * pages](/docs/rest-content/pages#update-pages) endpoint. To update a single page, use Pages V3ʼs
 * [Update a page](/docs/rest-content/pages#update-a-page) endpoint.
 */
class UpdateApage extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/pages/{$this->id}";
	}


	/**
	 * @param int $id ID of the page.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
