<?php

namespace Space48\Bigcommerce\Requests\Pages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePage
 *
 * Deletes a *Page*.
 *
 * > #### Warning
 * > **Deprecated**
 * > * This API operation is deprecated. Avoid using
 * this API operation if possible. It will be removed in a future version.
 * > * To delete multiple
 * pages, use Pages V3ʼs [Delete pages](/docs/rest-content/pages#delete-pages) endpoint. To delete a
 * single page, use Pages V3ʼs [Delete a page](/docs/rest-content/pages#delete-a-page) endpoint.
 */
class DeletePage extends Request
{
	protected Method $method = Method::DELETE;


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
