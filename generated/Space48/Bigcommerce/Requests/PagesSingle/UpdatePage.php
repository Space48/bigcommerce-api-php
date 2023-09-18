<?php

namespace Space48\Bigcommerce\Requests\PagesSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updatePage
 *
 * Updates one content page.
 */
class UpdatePage extends Request
{
	protected Method $method = Method::PUT;


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
