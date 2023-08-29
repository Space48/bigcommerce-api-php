<?php

namespace Space48\Bigcommerce\Requests\Sites;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSite
 *
 * Delete a site with site ID `{site_id}`.
 */
class DeleteSite extends Request
{
	protected Method $method = Method::DELETE;


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
