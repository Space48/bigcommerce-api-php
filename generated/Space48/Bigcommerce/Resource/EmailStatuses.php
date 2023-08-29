<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\EmailStatuses\GetSettingsEmailsEnabled;
use Space48\Bigcommerce\Requests\EmailStatuses\PutSettingsTransactionalEmailsEnabled;
use Space48\Bigcommerce\Resource;

class EmailStatuses extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getSettingsEmailsEnabled(int $channelId): Response
	{
		return $this->connector->send(new GetSettingsEmailsEnabled($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function putSettingsTransactionalEmailsEnabled(int $channelId): Response
	{
		return $this->connector->send(new PutSettingsTransactionalEmailsEnabled($channelId));
	}
}
