<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\StoreProfile\GetStoreProfileSettings;
use Space48\BigcommerceApi\Requests\StoreProfile\UpdateStoreProfileSettings;
use Space48\BigcommerceApi\Resource;

class StoreProfile extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getStoreProfileSettings(int $channelId): Response
	{
		return $this->connector->send(new GetStoreProfileSettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateStoreProfileSettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateStoreProfileSettings($channelId));
	}
}
