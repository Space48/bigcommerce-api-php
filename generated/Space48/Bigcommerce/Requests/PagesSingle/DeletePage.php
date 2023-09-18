<?php

namespace Space48\Bigcommerce\Requests\PagesSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePage
 *
 * Deletes one content page.
 *
 * > #### Warning
 * > **Query parameters not recognized**
 * > This endpoint does
 * not recognize query parameters.
 */
class DeletePage extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/content/pages/{$this->pageId}";
	}


	/**
	 * @param string $pageId The ID of the page to be operated on.
	 */
	public function __construct(
		protected string $pageId,
	) {
	}
}
