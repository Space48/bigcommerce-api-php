<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\StorefrontProduct\GetSettingsStorefrontProduct;
use Space48\Bigcommerce\Requests\StorefrontProduct\UpdateSettingsStorefrontProduct;
use Space48\Bigcommerce\Resource;

class StorefrontProduct extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getSettingsStorefrontProduct(?int $channelId): Response
	{
		return $this->connector->send(new GetSettingsStorefrontProduct($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateSettingsStorefrontProduct(?int $channelId): Response
	{
		return $this->connector->send(new UpdateSettingsStorefrontProduct($channelId));
	}
}
