<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\WebhookEvents\GetWebhookEvents;
use Space48\BigcommerceApi\Resource;

class WebhookEvents extends Resource
{
	/**
	 * @param string $createdAtMax Maximum value for returned data.
	 * @param string $createdAtMin Minimum value for returned data.
	 */
	public function getWebhookEvents(string $createdAtMax, string $createdAtMin): Response
	{
		return $this->connector->send(new GetWebhookEvents($createdAtMax, $createdAtMin));
	}
}
