<?php

namespace Space48\BigcommerceApi\Requests\EmailStatuses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * put-settings-transactional-emails-enabled
 *
 * Update global transactional email settings or create channel specific overrides by `channel_id`.
 */
class PutSettingsTransactionalEmailsEnabled extends Request
{
	protected Method $method = Method::PUT;


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
