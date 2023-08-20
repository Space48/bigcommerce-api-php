<?php

namespace Space48\BigcommerceApi\Requests\ManageWebhooksSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWebhook
 *
 * Return a webhook by ID.
 */
class GetWebhook extends Request
{
	protected Method $method = Method::GET;


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
