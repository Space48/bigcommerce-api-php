<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\FaviconImage\CreateSettingsFaviconImage;
use Space48\Bigcommerce\Resource;

class FaviconImage extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function createSettingsFaviconImage(?int $channelId): Response
	{
		return $this->connector->send(new CreateSettingsFaviconImage($channelId));
	}
}
