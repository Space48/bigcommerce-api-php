<?php

namespace Space48\Bigcommerce\Requests\SiteRoutes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSiteRoute
 *
 * Delete a site’s route.
 */
class DeleteSiteRoute extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/sites/{$this->siteId}/routes/{$this->routeId}";
	}


	/**
	 * @param string $siteId
	 * @param string $routeId
	 */
	public function __construct(
		protected string $siteId,
		protected string $routeId,
	) {
	}
}
