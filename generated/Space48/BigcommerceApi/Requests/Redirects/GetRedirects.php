<?php

namespace Space48\BigcommerceApi\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetRedirects
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
	 * @param int $siteId Filters items by `site_id`.
	 * @param array $idIn Filters items by redirect `id`. Also accepts comma-separated values to filter for multiple redirects.
	 * @param string $sort Field name to sort by. Note: Since redirect `id` increments when new redirects are added, you can use that field to sort by redirect create date.
	 * @param string $direction Sort direction. Acceptable values are `asc`, `desc`.
	 * @param string $include Indicates whether to include redirect sub-resources. Only `to_url` is supported.
	 * @param string $keyword Filters redirects by the specified keyword. Will only search from the beginning of a URL path. For example, `blue` will match `/blue` and `/blue-shirt` ,  **not** `/royal-blue-shirt`.
	 */
	public function __construct(
		protected int $siteId,
		protected array $idIn,
		protected string $sort,
		protected string $direction,
		protected string $include,
		protected string $keyword,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'site_id' => $this->siteId,
			'id:in' => $this->idIn,
			'sort' => $this->sort,
			'direction' => $this->direction,
			'include' => $this->include,
			'keyword' => $this->keyword,
		];
	}
}
