<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Sites\CreateSite;
use Space48\Bigcommerce\Requests\Sites\DeleteSite;
use Space48\Bigcommerce\Requests\Sites\GetSite;
use Space48\Bigcommerce\Requests\Sites\GetSites;
use Space48\Bigcommerce\Requests\Sites\UpdateSite;
use Space48\Bigcommerce\Resource;

class Sites extends Resource
{
	/**
	 * @param int $channelIdIn Filters returned sites by channel ID.
	 * @param string $urlTypeIn Filters sites returned in the `data.urls` array by their URL type.
	 */
	public function getSites(?int $channelIdIn, ?string $urlTypeIn): Response
	{
		return $this->connector->send(new GetSites($channelIdIn, $urlTypeIn));
	}


	public function createSite(): Response
	{
		return $this->connector->send(new CreateSite());
	}


	/**
	 * @param string $siteId
	 */
	public function getSite(string $siteId): Response
	{
		return $this->connector->send(new GetSite($siteId));
	}


	/**
	 * @param string $siteId
	 */
	public function updateSite(string $siteId): Response
	{
		return $this->connector->send(new UpdateSite($siteId));
	}


	/**
	 * @param string $siteId
	 */
	public function deleteSite(string $siteId): Response
	{
		return $this->connector->send(new DeleteSite($siteId));
	}
}
