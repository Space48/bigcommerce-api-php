<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Logo\GetSettingsLogo;
use Space48\BigcommerceApi\Requests\Logo\PutSettingsLogo;
use Space48\BigcommerceApi\Resource;

class Logo extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getSettingsLogo(int $channelId): Response
	{
		return $this->connector->send(new GetSettingsLogo($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function putSettingsLogo(int $channelId): Response
	{
		return $this->connector->send(new PutSettingsLogo($channelId));
	}
}
