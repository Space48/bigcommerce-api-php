<?php

namespace Space48\Bigcommerce\Requests\PagesBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * content-pages-put
 *
 * Updates one or more content pages. This endpoint supports bulk operations.
 */
class ContentPagesPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/content/pages";
	}


	/**
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function __construct(
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include' => $this->include];
	}
}
