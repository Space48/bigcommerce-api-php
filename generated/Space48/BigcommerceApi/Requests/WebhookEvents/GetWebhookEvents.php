<?php

namespace Space48\BigcommerceApi\Requests\WebhookEvents;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWebhookEvents
 *
 * Get a list of events that were sent but not successfully received. Events are stored for not less
 * than one week.
 */
class GetWebhookEvents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/hooks/events";
	}


	/**
	 * @param string $createdAtMax Maximum value for returned data.
	 * @param string $createdAtMin Minimum value for returned data.
	 */
	public function __construct(
		protected string $createdAtMax,
		protected string $createdAtMin,
	) {
	}


	public function defaultQuery(): array
	{
		return ['created_at:max' => $this->createdAtMax, 'created_at:min' => $this->createdAtMin];
	}
}
