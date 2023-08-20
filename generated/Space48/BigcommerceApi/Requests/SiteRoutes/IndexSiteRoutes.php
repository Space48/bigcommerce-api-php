<?php

namespace Space48\BigcommerceApi\Requests\SiteRoutes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * index-site-routes
 *
 * Get a site’s routes.
 */
class IndexSiteRoutes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sites/{$this->siteId}/routes";
	}


	/**
	 * @param int $siteId
	 * @param string $type Filter routes by a specified resource type.
	 */
	public function __construct(
		protected int $siteId,
		protected string $type,
	) {
	}


	public function defaultQuery(): array
	{
		return ['type' => $this->type];
	}
}
