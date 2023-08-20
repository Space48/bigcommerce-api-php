<?php

namespace Space48\BigcommerceApi\Requests\ChannelSite;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-channel-site
 *
 * Alias of `GET /sites?channel_id=channel_id`
 *
 * Returns site data for the specified channel.
 */
class GetChannelSite extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/site";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}