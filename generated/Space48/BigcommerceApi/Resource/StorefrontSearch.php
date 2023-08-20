<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\StorefrontSearch\GetStorefrontSearchSettings;
use Space48\BigcommerceApi\Requests\StorefrontSearch\UpdateStorefrontSearchSettings;
use Space48\BigcommerceApi\Resource;

class StorefrontSearch extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getStorefrontSearchSettings(int $channelId): Response
	{
		return $this->connector->send(new GetStorefrontSearchSettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateStorefrontSearchSettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateStorefrontSearchSettings($channelId));
	}
}
