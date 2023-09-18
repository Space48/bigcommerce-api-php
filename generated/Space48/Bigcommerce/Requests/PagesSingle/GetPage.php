<?php

namespace Space48\Bigcommerce\Requests\PagesSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPage
 *
 * Returns one content page.
 *
 * > #### Warning
 * > **Pay attention to query parameters**
 * > This endpoint
 * recognizes the same query parameters as [Get Multiple Pages](/docs/rest-content/pages#get-pages). If
 * the requested page does not meet the query parameters you specify, you will receive a 404 response
 * even if the requested `pageId` does exist.
 */
class GetPage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/pages/{$this->pageId}";
	}


	/**
	 * @param string $pageId The ID of the page to be operated on.
	 * @param null|string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function __construct(
		protected string $pageId,
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
