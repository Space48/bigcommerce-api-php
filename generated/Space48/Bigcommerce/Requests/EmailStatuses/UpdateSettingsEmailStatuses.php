<?php

namespace Space48\Bigcommerce\Requests\EmailStatuses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateSettingsEmailStatuses
 *
 * Update global transactional email settings or create channel specific overrides by `channel_id`.
 */
class UpdateSettingsEmailStatuses extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/settings/email-statuses";
	}


	/**
	 * @param null|int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected ?int $channelId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['channel_id' => $this->channelId]);
	}
}
