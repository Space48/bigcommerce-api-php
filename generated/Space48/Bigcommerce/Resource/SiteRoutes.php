<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\SiteRoutes\CreateSiteRoute;
use Space48\Bigcommerce\Requests\SiteRoutes\DeleteSiteRoute;
use Space48\Bigcommerce\Requests\SiteRoutes\GetSiteRoute;
use Space48\Bigcommerce\Requests\SiteRoutes\GetSiteRoutes;
use Space48\Bigcommerce\Requests\SiteRoutes\UpdateSiteRoute;
use Space48\Bigcommerce\Requests\SiteRoutes\UpdateSitesRoutes;
use Space48\Bigcommerce\Resource;

class SiteRoutes extends Resource
{
	/**
	 * @param int $siteId
	 * @param string $type Filter routes by a specified resource type.
	 */
	public function getSiteRoutes(int $siteId, ?string $type): Response
	{
		return $this->connector->send(new GetSiteRoutes($siteId, $type));
	}


	/**
	 * @param int $siteId
	 */
	public function updateSitesRoutes(int $siteId): Response
	{
		return $this->connector->send(new UpdateSitesRoutes($siteId));
	}


	/**
	 * @param int $siteId
	 */
	public function createSiteRoute(int $siteId): Response
	{
		return $this->connector->send(new CreateSiteRoute($siteId));
	}


	/**
	 * @param string $siteId
	 * @param string $routeId
	 */
	public function getSiteRoute(string $siteId, string $routeId): Response
	{
		return $this->connector->send(new GetSiteRoute($siteId, $routeId));
	}


	/**
	 * @param string $siteId
	 * @param string $routeId
	 */
	public function updateSiteRoute(string $siteId, string $routeId): Response
	{
		return $this->connector->send(new UpdateSiteRoute($siteId, $routeId));
	}


	/**
	 * @param string $siteId
	 * @param string $routeId
	 */
	public function deleteSiteRoute(string $siteId, string $routeId): Response
	{
		return $this->connector->send(new DeleteSiteRoute($siteId, $routeId));
	}
}
