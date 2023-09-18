<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\EmailStatuses\GetSettingsEmailStatuses;
use Space48\Bigcommerce\Requests\EmailStatuses\UpdateSettingsEmailStatuses;
use Space48\Bigcommerce\Resource;

class EmailStatuses extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getSettingsEmailStatuses(?int $channelId): Response
	{
		return $this->connector->send(new GetSettingsEmailStatuses($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateSettingsEmailStatuses(?int $channelId): Response
	{
		return $this->connector->send(new UpdateSettingsEmailStatuses($channelId));
	}
}
