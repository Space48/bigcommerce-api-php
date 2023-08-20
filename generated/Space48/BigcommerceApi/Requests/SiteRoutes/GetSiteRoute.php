<?php

namespace Space48\BigcommerceApi\Requests\SiteRoutes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-site-route
 *
 * Get a site’s route.
 */
class GetSiteRoute extends Request
{
	protected Method $method = Method::GET;


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
