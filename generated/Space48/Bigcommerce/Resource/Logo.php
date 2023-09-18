<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Logo\GetSettingsLogo;
use Space48\Bigcommerce\Requests\Logo\UpdateSettingsLogo;
use Space48\Bigcommerce\Resource;

class Logo extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getSettingsLogo(?int $channelId): Response
	{
		return $this->connector->send(new GetSettingsLogo($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateSettingsLogo(?int $channelId): Response
	{
		return $this->connector->send(new UpdateSettingsLogo($channelId));
	}
}
