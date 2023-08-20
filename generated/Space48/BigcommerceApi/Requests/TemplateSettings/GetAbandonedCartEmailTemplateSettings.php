<?php

namespace Space48\BigcommerceApi\Requests\TemplateSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetAbandonedCartEmailTemplateSettings
 *
 * Read Abandoned Cart Email Template settings.
 */
class GetAbandonedCartEmailTemplateSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/marketing/abandoned-cart-emails/settings";
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting.
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