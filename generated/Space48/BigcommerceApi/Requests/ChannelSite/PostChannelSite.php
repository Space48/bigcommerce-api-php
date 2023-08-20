<?php

namespace Space48\BigcommerceApi\Requests\ChannelSite;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * postChannelSite
 *
 * Alias of POST `/sites`. Creates a site for provided channel.
 */
class PostChannelSite extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
