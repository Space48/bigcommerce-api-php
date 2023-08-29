<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\SiteRoutes\DeleteRoute;
use Space48\Bigcommerce\Requests\SiteRoutes\GetSiteRoute;
use Space48\Bigcommerce\Requests\SiteRoutes\IndexSiteRoutes;
use Space48\Bigcommerce\Requests\SiteRoutes\PostSiteRoute;
use Space48\Bigcommerce\Requests\SiteRoutes\PutSiteRoute;
use Space48\Bigcommerce\Requests\SiteRoutes\UpdateSitesRoutes;
use Space48\Bigcommerce\Resource;

class SiteRoutes extends Resource
{
	/**
	 * @param int $siteId
	 * @param string $type Filter routes by a specified resource type.
	 */
	public function indexSiteRoutes(int $siteId, string $type): Response
	{
		return $this->connector->send(new IndexSiteRoutes($siteId, $type));
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
	public function postSiteRoute(int $siteId): Response
	{
		return $this->connector->send(new PostSiteRoute($siteId));
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
	public function putSiteRoute(string $siteId, string $routeId): Response
	{
		return $this->connector->send(new PutSiteRoute($siteId, $routeId));
	}


	/**
	 * @param string $siteId
	 * @param string $routeId
	 */
	public function deleteRoute(string $siteId, string $routeId): Response
	{
		return $this->connector->send(new DeleteRoute($siteId, $routeId));
	}
}
