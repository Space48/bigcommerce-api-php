<?php

namespace Space48\BigcommerceApi\Requests\ChannelMenus;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * postChannelMenus
 *
 * Creates or replaces list of control panel side navigation menus for a channel.
 */
class PostChannelMenus extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
