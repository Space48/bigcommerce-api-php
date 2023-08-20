<?php

namespace Space48\BigcommerceApi\Requests\ChannelSite;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteChannelSite
 *
 * Deletes the Channel's site.
 */
class DeleteChannelSite extends Request
{
	protected Method $method = Method::DELETE;


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