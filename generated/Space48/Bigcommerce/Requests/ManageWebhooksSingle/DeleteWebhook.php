<?php

namespace Space48\Bigcommerce\Requests\ManageWebhooksSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteWebhook
 *
 * Deletes a webhook. Only one webhook at a time can be deleted. When a webhook is deleted, it is
 * returned in the response as a 200 OK.
 */
class DeleteWebhook extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/hooks/{$this->webhookId}";
	}


	/**
	 * @param int $webhookId The ID of a Webhook.
	 */
	public function __construct(
		protected int $webhookId,
	) {
	}
}
