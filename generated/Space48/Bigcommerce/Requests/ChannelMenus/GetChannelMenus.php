<?php

namespace Space48\Bigcommerce\Requests\ChannelMenus;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelMenus
 *
 * Returns list of Control Panel side navigation menus for a channel.
 */
class GetChannelMenus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/channel-menus";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
