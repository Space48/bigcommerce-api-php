<?php

namespace Space48\Bigcommerce\Requests\ManageWebhooksSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateAWebhook
 *
 * Updates a webhook. Custom headers can be added.
 */
class UpdateAwebhook extends Request
{
	protected Method $method = Method::PUT;


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
