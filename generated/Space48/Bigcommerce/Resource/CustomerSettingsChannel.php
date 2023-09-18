<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerSettingsChannel\GetCustomersSettingsChannel;
use Space48\Bigcommerce\Requests\CustomerSettingsChannel\UpdateCustomersSettingsChannel;
use Space48\Bigcommerce\Resource;

class CustomerSettingsChannel extends Resource
{
	/**
	 * @param string $channelId
	 */
	public function getCustomersSettingsChannel(string $channelId): Response
	{
		return $this->connector->send(new GetCustomersSettingsChannel($channelId));
	}


	/**
	 * @param string $channelId
	 */
	public function updateCustomersSettingsChannel(string $channelId): Response
	{
		return $this->connector->send(new UpdateCustomersSettingsChannel($channelId));
	}
}
