<?php

namespace Space48\Bigcommerce\Requests\TemplateSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateAbandonedCartEmailTemplateSettings
 *
 * Update Abandoned Cart Email template settings.
 */
class UpdateAbandonedCartEmailTemplateSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/marketing/abandoned-cart-emails/settings";
	}


	/**
	 * @param null|int $channelId Channel ID to use for channel-level data.
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
