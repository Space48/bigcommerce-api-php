<?php

namespace Space48\Bigcommerce\Requests\Analytics;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a Web Analytics Provider
 *
 * Returns a single web analytics provider data for a default channel.
 */
class GetWebAnalyticsProvider extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/analytics/{$this->id}";
	}


	/**
	 * @param int $id Web Analytics Provider ID.
	 * @param null|int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected int $id,
		protected ?int $channelId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['channel_id' => $this->channelId]);
	}
}
