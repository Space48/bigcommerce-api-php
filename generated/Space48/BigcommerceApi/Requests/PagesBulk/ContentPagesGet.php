<?php

namespace Space48\BigcommerceApi\Requests\PagesBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * content-pages-get
 *
 * Returns one or more content pages. This endpoint supports bulk operations.
 */
class ContentPagesGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/pages";
	}


	/**
	 * @param int $channelId Return only pages associated with the specified channel.
	 * @param string $idIn A comma-separated string of page IDs to fetch. Supports bulk operations. If none of the page IDs passed exist, the query will return an empty `data` array.
	 * @param string $name Name of the page.
	 * @param string $nameLike Return only pages whose `name` or `body` contain the supplied string.
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function __construct(
		protected int $channelId,
		protected string $idIn,
		protected string $name,
		protected string $nameLike,
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'channel_id' => $this->channelId,
			'id:in' => $this->idIn,
			'name' => $this->name,
			'name:like' => $this->nameLike,
			'include' => $this->include,
		];
	}
}
