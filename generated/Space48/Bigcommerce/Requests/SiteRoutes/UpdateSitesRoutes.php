<?php

namespace Space48\Bigcommerce\Requests\SiteRoutes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a Site’s Routes
 *
 * Upsert routes for site with ID `{site_id}`.
 *
 * ## Usage Notes
 * * `id` is required when updating an
 * existing route.
 */
class UpdateSitesRoutes extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/sites/{$this->siteId}/routes";
	}


	/**
	 * @param int $siteId
	 */
	public function __construct(
		protected int $siteId,
	) {
	}
}
