<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\LogoImage\PostSettingsLogoImage;
use Space48\BigcommerceApi\Resource;

class LogoImage extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function postSettingsLogoImage(int $channelId): Response
	{
		return $this->connector->send(new PostSettingsLogoImage($channelId));
	}
}
