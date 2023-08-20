<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\StorefrontSeo\GetStorefrontSeoSettings;
use Space48\BigcommerceApi\Requests\StorefrontSeo\UpdateStorefrontSeoSettings;
use Space48\BigcommerceApi\Resource;

class StorefrontSeo extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getStorefrontSeoSettings(int $channelId): Response
	{
		return $this->connector->send(new GetStorefrontSeoSettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateStorefrontSeoSettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateStorefrontSeoSettings($channelId));
	}
}
