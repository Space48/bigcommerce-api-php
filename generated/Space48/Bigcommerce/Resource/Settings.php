<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Settings\GetChannelCartSettings;
use Space48\Bigcommerce\Requests\Settings\GetGlobalCartSettings;
use Space48\Bigcommerce\Requests\Settings\UpdateChannelCartSettings;
use Space48\Bigcommerce\Requests\Settings\UpdateGlobalCartSettings;
use Space48\Bigcommerce\Resource;

class Settings extends Resource
{
	public function getGlobalCartSettings(): Response
	{
		return $this->connector->send(new GetGlobalCartSettings());
	}


	public function updateGlobalCartSettings(): Response
	{
		return $this->connector->send(new UpdateGlobalCartSettings());
	}


	/**
	 * @param int $channelId The channel ID of the settings overrides.
	 */
	public function getChannelCartSettings(int $channelId): Response
	{
		return $this->connector->send(new GetChannelCartSettings($channelId));
	}


	/**
	 * @param int $channelId The channel ID of the settings overrides.
	 */
	public function updateChannelCartSettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateChannelCartSettings($channelId));
	}
}
