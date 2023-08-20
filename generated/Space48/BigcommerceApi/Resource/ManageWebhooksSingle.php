<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ManageWebhooksSingle\DeleteAwebhook;
use Space48\BigcommerceApi\Requests\ManageWebhooksSingle\GetWebhook;
use Space48\BigcommerceApi\Requests\ManageWebhooksSingle\UpdateAwebhook;
use Space48\BigcommerceApi\Resource;

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
	public function updateAwebhook(int $webhookId): Response
	{
		return $this->connector->send(new UpdateAwebhook($webhookId));
	}


	/**
	 * @param int $webhookId The ID of a Webhook.
	 */
	public function deleteAwebhook(int $webhookId): Response
	{
		return $this->connector->send(new DeleteAwebhook($webhookId));
	}
}
