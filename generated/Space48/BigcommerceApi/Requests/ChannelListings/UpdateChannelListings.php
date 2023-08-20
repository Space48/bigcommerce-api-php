<?php

namespace Space48\BigcommerceApi\Requests\ChannelListings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateChannelListings
 *
 * Updates one or more *Channel Listings* for a specific channel.
 *
 * > #### Note
 * > * Partial updates are
 * supported. In most cases, if a field that *cannot* be updated is passed in, the API **will not**
 * respond with an error. It returns a 200 response with the object, in which you will see the field(s)
 * were not updated.
 * > * If a new variant is provided, the API will append the variant to the list. If
 * a variant already exists, the API will update the existing variant. Other variants that are not
 * provided in the payload remains unchanged.
 * > * If `listing_id` does not exist, the API will return a
 * 200 response with empty data.
 * > * `listing_id` is required and cannot be less than or equal to
 * zero.
 * > * `product_id` cannot be updated after a channel listing is created.
 * > * `product_id` of a
 * variant must match the `product_id` of the channel listing.
 */
class UpdateChannelListings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/listings";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
