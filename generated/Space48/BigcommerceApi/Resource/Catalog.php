<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Catalog\GetCatalogSettings;
use Space48\BigcommerceApi\Requests\Catalog\UpdateCatalogSettings;
use Space48\BigcommerceApi\Resource;

class Catalog extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getCatalogSettings(int $channelId): Response
	{
		return $this->connector->send(new GetCatalogSettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateCatalogSettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateCatalogSettings($channelId));
	}
}
