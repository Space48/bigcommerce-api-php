<?php

namespace Space48\Bigcommerce\Requests\ChannelSite;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateChannelSite
 *
 * Updates a site for provided channel.
 */
class UpdateChannelSite extends Request
{
	protected Method $method = Method::PUT;


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
