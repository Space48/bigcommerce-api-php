<?php

namespace Space48\Bigcommerce\Requests\Sites;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSite
 *
 * Get a site with site ID `{site_id}`.
 */
class GetSite extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sites/{$this->siteId}";
	}


	/**
	 * @param string $siteId
	 */
	public function __construct(
		protected string $siteId,
	) {
	}
}
