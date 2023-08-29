<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\WebhookEvents\GetWebhookEvents;
use Space48\Bigcommerce\Resource;

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
