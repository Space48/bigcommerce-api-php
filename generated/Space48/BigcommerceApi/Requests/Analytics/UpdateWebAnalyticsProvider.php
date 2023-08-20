<?php

namespace Space48\BigcommerceApi\Requests\Analytics;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a Web Analytics Provider
 *
 * Updates a single web analytics provider data for a default channel.
 */
class UpdateWebAnalyticsProvider extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/settings/analytics/{$this->id}";
	}


	/**
	 * @param int $id
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected int $id,
		protected int $channelId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id' => $this->channelId];
	}
}
