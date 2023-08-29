<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\StorefrontStatus\GetStorefrontStatus;
use Space48\Bigcommerce\Requests\StorefrontStatus\UpdateStorefrontStatus;
use Space48\Bigcommerce\Resource;

class StorefrontStatus extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getStorefrontStatus(int $channelId): Response
	{
		return $this->connector->send(new GetStorefrontStatus($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateStorefrontStatus(int $channelId): Response
	{
		return $this->connector->send(new UpdateStorefrontStatus($channelId));
	}
}
