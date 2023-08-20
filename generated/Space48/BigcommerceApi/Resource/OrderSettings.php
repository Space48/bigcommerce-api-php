<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\OrderSettings\GetChannelOrderSettings;
use Space48\BigcommerceApi\Requests\OrderSettings\GetGlobalOrderSettings;
use Space48\BigcommerceApi\Requests\OrderSettings\UpdateChannelOrderSettings;
use Space48\BigcommerceApi\Requests\OrderSettings\UpdateGlobalOrderSettings;
use Space48\BigcommerceApi\Resource;

class OrderSettings extends Resource
{
	public function getGlobalOrderSettings(): Response
	{
		return $this->connector->send(new GetGlobalOrderSettings());
	}


	public function updateGlobalOrderSettings(): Response
	{
		return $this->connector->send(new UpdateGlobalOrderSettings());
	}


	/**
	 * @param string $channelId Channel ID
	 */
	public function getChannelOrderSettings(string $channelId): Response
	{
		return $this->connector->send(new GetChannelOrderSettings($channelId));
	}


	/**
	 * @param string $channelId Channel ID
	 */
	public function updateChannelOrderSettings(string $channelId): Response
	{
		return $this->connector->send(new UpdateChannelOrderSettings($channelId));
	}
}
