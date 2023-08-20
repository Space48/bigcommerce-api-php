<?php

namespace Space48\BigcommerceApi\Requests\ChannelMenus;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteChannelMenus
 *
 * Deletes control panel side navigation menus for a channel.
 */
class DeleteChannelMenus extends Request
{
	protected Method $method = Method::DELETE;


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
