<?php

namespace Space48\Bigcommerce\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getRedirects
 *
 * Returns a collection of the store's 301 redirects across all sites.
 */
class GetRedirects extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/storefront/redirects";
	}


	/**
	 * @param null|int $siteId Filters items by `site_id`.
	 * @param null|array $idIn Filters items by redirect `id`. Also accepts comma-separated values to filter for multiple redirects.
	 * @param null|string $sort Field name to sort by. Note: Since redirect `id` increments when new redirects are added, you can use that field to sort by redirect create date.
	 * @param null|string $direction Sort direction. Acceptable values are `asc`, `desc`.
	 * @param null|string $include Indicates whether to include redirect sub-resources. Only `to_url` is supported.
	 * @param null|string $keyword Filters redirects by the specified keyword. Will only search from the beginning of a URL path. For example, `blue` will match `/blue` and `/blue-shirt` ,  **not** `/royal-blue-shirt`.
	 */
	public function __construct(
		protected ?int $siteId = null,
		protected ?array $idIn = null,
		protected ?string $sort = null,
		protected ?string $direction = null,
		protected ?string $include = null,
		protected ?string $keyword = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'site_id' => $this->siteId,
			'id:in' => $this->idIn,
			'sort' => $this->sort,
			'direction' => $this->direction,
			'include' => $this->include,
			'keyword' => $this->keyword,
		]);
	}
}
