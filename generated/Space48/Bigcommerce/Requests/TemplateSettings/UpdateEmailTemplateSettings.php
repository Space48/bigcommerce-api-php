<?php

namespace Space48\Bigcommerce\Requests\TemplateSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateEmailTemplateSettings
 *
 * Update Abandoned Cart Email template settings.
 */
class UpdateEmailTemplateSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/marketing/abandoned-cart-emails/settings";
	}


	/**
	 * @param int $channelId Channel ID to use for channel-level data.
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
