<?php

namespace Space48\Bigcommerce\Requests\ChannelListings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelListing
 *
 * Returns a *Channel Listing* for a specific channel.
 */
class GetChannelListing extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/listings/{$this->listingId}";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param int $listingId The ID of a channel listing.
	 */
	public function __construct(
		protected int $channelId,
		protected int $listingId,
	) {
	}
}
