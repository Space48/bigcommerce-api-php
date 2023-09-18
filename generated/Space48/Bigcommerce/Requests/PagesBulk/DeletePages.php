<?php

namespace Space48\Bigcommerce\Requests\PagesBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePages
 *
 * Deletes one or more content pages. This endpoint supports bulk operations.
 *
 * > #### Warning
 * > **Pay
 * attention to query parameters**
 * > If you attempt to delete multiple pages by passing more than one
 * page ID to `id:in` and one or more of them does not exist, you will receive a 404 response. However,
 * the pages corresponding to the page IDs that do exist will still be deleted.
 */
class DeletePages extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/content/pages";
	}


	/**
	 * @param string $idIn Request deletion of multiple pages by passing a comma-separated string of corresponding page IDs. Supports bulk operations.
	 */
	public function __construct(
		protected string $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn]);
	}
}
