<?php

namespace Space48\Bigcommerce\Requests\PagesBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updatePages
 *
 * Updates one or more content pages. This endpoint supports bulk operations.
 */
class UpdatePages extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/content/pages";
	}


	/**
	 * @param null|string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function __construct(
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
