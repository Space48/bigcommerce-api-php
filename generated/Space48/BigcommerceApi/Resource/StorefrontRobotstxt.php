<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\StorefrontRobotstxt\GetRobotsTxtSettings;
use Space48\BigcommerceApi\Requests\StorefrontRobotstxt\UpdateRobotsTxtSettings;
use Space48\BigcommerceApi\Resource;

class StorefrontRobotstxt extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getRobotsTxtSettings(int $channelId): Response
	{
		return $this->connector->send(new GetRobotsTxtSettings($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateRobotsTxtSettings(int $channelId): Response
	{
		return $this->connector->send(new UpdateRobotsTxtSettings($channelId));
	}
}
