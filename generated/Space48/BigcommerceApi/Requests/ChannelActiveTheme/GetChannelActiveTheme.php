<?php

namespace Space48\BigcommerceApi\Requests\ChannelActiveTheme;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelActiveTheme
 *
 * Returns details of the theme active on the specified channel.
 * Does not support active Blueprint
 * (legacy) themes.
 */
class GetChannelActiveTheme extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/active-theme";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
