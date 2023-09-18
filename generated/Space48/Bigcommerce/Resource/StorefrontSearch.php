<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\StorefrontSearch\GetSettingsStorefrontSearch;
use Space48\Bigcommerce\Requests\StorefrontSearch\UpdateStorefrontSearchSettings;
use Space48\Bigcommerce\Resource;

class StorefrontSearch extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getSettingsStorefrontSearch(?int $channelId): Response
	{
		return $this->connector->send(new GetSettingsStorefrontSearch($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateStorefrontSearchSettings(?int $channelId): Response
	{
		return $this->connector->send(new UpdateStorefrontSearchSettings($channelId));
	}
}
