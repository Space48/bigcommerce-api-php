<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\StorefrontSecurity\GetStorefrontSecuritySettings;
use Space48\Bigcommerce\Requests\StorefrontSecurity\UpdateStorefrontSecuritySettings;
use Space48\Bigcommerce\Resource;

class StorefrontSecurity extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getStorefrontSecuritySettings(int $channelId): Response
	{
		return $this->connector->send(new GetStorefrontSecuritySettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateStorefrontSecuritySettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateStorefrontSecuritySettings($channelId));
	}
}
