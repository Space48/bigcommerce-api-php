<?php

namespace Space48\Bigcommerce\Requests\EmailStatuses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-settings-emails-enabled
 *
 * Get global transactional email settings or channel specific overrides by `channel_id`.
 */
class GetSettingsEmailsEnabled extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/email-statuses";
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id' => $this->channelId];
	}
}
