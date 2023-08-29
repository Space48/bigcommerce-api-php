<?php

namespace Space48\Bigcommerce\Requests\Pages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAPage
 *
 * Returns a *Page*.
 *
 * > #### Warning
 * > **Deprecated**
 * > * This API operation is deprecated. Avoid
 * using this API operation if possible. It will be removed in a future version.
 * > * To get a single
 * page, use Pages V3ʼs [Get a page](/docs/rest-content/pages#get-a-page) endpoint.
 */
class GetApage extends Request
{
	protected Method $method = Method::GET;


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
