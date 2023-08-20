<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerSettingsChannel\CustomerSettingsChannelGet;
use Space48\BigcommerceApi\Requests\CustomerSettingsChannel\CustomerSettingsChannelPut;
use Space48\BigcommerceApi\Resource;

class CustomerSettingsChannel extends Resource
{
	/**
	 * @param string $channelId
	 */
	public function customerSettingsChannelGet(string $channelId): Response
	{
		return $this->connector->send(new CustomerSettingsChannelGet($channelId));
	}


	/**
	 * @param string $channelId
	 */
	public function customerSettingsChannelPut(string $channelId): Response
	{
		return $this->connector->send(new CustomerSettingsChannelPut($channelId));
	}
}
