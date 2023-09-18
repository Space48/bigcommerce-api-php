<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\TemplateSettings\GetAbandonedCartEmailTemplateSettings;
use Space48\Bigcommerce\Requests\TemplateSettings\UpdateAbandonedCartEmailTemplateSettings;
use Space48\Bigcommerce\Resource;

class TemplateSettings extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting.
	 */
	public function getAbandonedCartEmailTemplateSettings(int $channelId): Response
	{
		return $this->connector->send(new GetAbandonedCartEmailTemplateSettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-level data.
	 */
	public function updateAbandonedCartEmailTemplateSettings(?int $channelId): Response
	{
		return $this->connector->send(new UpdateAbandonedCartEmailTemplateSettings($channelId));
	}
}
