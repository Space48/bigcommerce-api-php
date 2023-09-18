<?php

namespace Space48\Bigcommerce\Requests\SiteRoutes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSiteRoutes
 *
 * Get a site’s routes.
 */
class GetSiteRoutes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sites/{$this->siteId}/routes";
	}


	/**
	 * @param int $siteId
	 * @param null|string $type Filter routes by a specified resource type.
	 */
	public function __construct(
		protected int $siteId,
		protected ?string $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['type' => $this->type]);
	}
}
