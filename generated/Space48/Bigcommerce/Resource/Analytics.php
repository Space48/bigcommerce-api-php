<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Analytics\GetAllWebAnalyticsProviders;
use Space48\Bigcommerce\Requests\Analytics\GetWebAnalyticsProvider;
use Space48\Bigcommerce\Requests\Analytics\UpdateWebAnalyticsProvider;
use Space48\Bigcommerce\Resource;

class Analytics extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getAllWebAnalyticsProviders(?int $channelId): Response
	{
		return $this->connector->send(new GetAllWebAnalyticsProviders($channelId));
	}


	/**
	 * @param int $id Web Analytics Provider ID.
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getWebAnalyticsProvider(int $id, ?int $channelId): Response
	{
		return $this->connector->send(new GetWebAnalyticsProvider($id, $channelId));
	}


	/**
	 * @param int $id Web Analytics Provider ID.
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateWebAnalyticsProvider(int $id, ?int $channelId): Response
	{
		return $this->connector->send(new UpdateWebAnalyticsProvider($id, $channelId));
	}
}
