<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\StorefrontCategory\GetStorefrontCategorySettings;
use Space48\Bigcommerce\Requests\StorefrontCategory\UpdateStorefrontCategorySettings;
use Space48\Bigcommerce\Resource;

class StorefrontCategory extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getStorefrontCategorySettings(?int $channelId): Response
	{
		return $this->connector->send(new GetStorefrontCategorySettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateStorefrontCategorySettings(?int $channelId): Response
	{
		return $this->connector->send(new UpdateStorefrontCategorySettings($channelId));
	}
}
