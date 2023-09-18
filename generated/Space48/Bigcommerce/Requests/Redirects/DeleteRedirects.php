<?php

namespace Space48\Bigcommerce\Requests\Redirects;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteRedirects
 *
 * Deletes redirects.
 */
class DeleteRedirects extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/storefront/redirects";
	}


	/**
	 * @param array $idIn List of Redirect IDs to delete explicitly.
	 * @param null|int $siteId Site ID provided to delete all redirects for a given Site.
	 */
	public function __construct(
		protected array $idIn,
		protected ?int $siteId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn, 'site_id' => $this->siteId]);
	}
}
