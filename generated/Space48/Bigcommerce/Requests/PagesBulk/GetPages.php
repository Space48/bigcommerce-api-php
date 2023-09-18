<?php

namespace Space48\Bigcommerce\Requests\PagesBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPages
 *
 * Returns one or more content pages. This endpoint supports bulk operations.
 */
class GetPages extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/pages";
	}


	/**
	 * @param null|int $channelId Return only pages associated with the specified channel.
	 * @param null|string $idIn A comma-separated string of page IDs to fetch. Supports bulk operations. If none of the page IDs passed exist, the query will return an empty `data` array.
	 * @param null|string $name Name of the page.
	 * @param null|string $nameLike Return only pages whose `name` or `body` contain the supplied string.
	 * @param null|string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function __construct(
		protected ?int $channelId = null,
		protected ?string $idIn = null,
		protected ?string $name = null,
		protected ?string $nameLike = null,
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'channel_id' => $this->channelId,
			'id:in' => $this->idIn,
			'name' => $this->name,
			'name:like' => $this->nameLike,
			'include' => $this->include,
		]);
	}
}
