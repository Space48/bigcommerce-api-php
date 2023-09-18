<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ManageWebhooksSingle\DeleteWebhook;
use Space48\Bigcommerce\Requests\ManageWebhooksSingle\GetWebhook;
use Space48\Bigcommerce\Requests\ManageWebhooksSingle\UpdateWebhook;
use Space48\Bigcommerce\Resource;

class ManageWebhooksSingle extends Resource
{
	/**
	 * @param int $webhookId The ID of a Webhook.
	 */
	public function getWebhook(int $webhookId): Response
	{
		return $this->connector->send(new GetWebhook($webhookId));
	}


	/**
	 * @param int $webhookId The ID of a Webhook.
	 */
	public function updateWebhook(int $webhookId): Response
	{
		return $this->connector->send(new UpdateWebhook($webhookId));
	}


	/**
	 * @param int $webhookId The ID of a Webhook.
	 */
	public function deleteWebhook(int $webhookId): Response
	{
		return $this->connector->send(new DeleteWebhook($webhookId));
	}
}
