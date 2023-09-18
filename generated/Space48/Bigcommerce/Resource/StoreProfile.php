<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\StoreProfile\GetStoreProfileSettings;
use Space48\Bigcommerce\Requests\StoreProfile\UpdateStoreProfileSettings;
use Space48\Bigcommerce\Resource;

class StoreProfile extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getStoreProfileSettings(?int $channelId): Response
	{
		return $this->connector->send(new GetStoreProfileSettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateStoreProfileSettings(?int $channelId): Response
	{
		return $this->connector->send(new UpdateStoreProfileSettings($channelId));
	}
}
