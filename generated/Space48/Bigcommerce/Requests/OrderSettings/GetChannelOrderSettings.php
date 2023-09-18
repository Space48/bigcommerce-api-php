<?php

namespace Space48\Bigcommerce\Requests\OrderSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelOrderSettings
 *
 * Returns order settings for a specific channel.
 */
class GetChannelOrderSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/settings/channels/{$this->channelId}";
	}


	/**
	 * @param string $channelId Channel ID
	 */
	public function __construct(
		protected string $channelId,
	) {
	}
}
