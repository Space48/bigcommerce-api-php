<?php

namespace Space48\BigcommerceApi\Requests\CustomerSettingsChannel;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomerSettingsChannelPut
 *
 * Update the customer settings per channel
 *
 * **Required Fields**
 *
 * * `channel_id`: Provide a
 * `channel_id` array containing one or more channel IDs. Customers will have access to these channels
 * and no others. This array cannot be empty.
 *
 * **Notes**
 *
 * * Setting `null` will delete override per
 * given channel, and values will be inherited from the global level. Make sure the channel has
 * `allow_global_logins` enabled.
 */
class CustomerSettingsChannelPut extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers/settings/channels/{$this->channelId}";
	}


	/**
	 * @param string $channelId
	 */
	public function __construct(
		protected string $channelId,
	) {
	}
}
