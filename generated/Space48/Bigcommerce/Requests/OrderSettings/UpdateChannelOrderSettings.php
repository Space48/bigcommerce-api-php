<?php

namespace Space48\Bigcommerce\Requests\OrderSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateChannelOrderSettings
 *
 * Updates order settings for a specific channel.
 *
 *  **Note:** You must override both notifications
 * `email_addresses` or neither, i.e. either both notification `email_addresses` are an array of valid
 * email addresses, or both `email_addresses` must be null. You may not have one set to an array of
 * addresses and the other set to `null`.
 */
class UpdateChannelOrderSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/orders/settings/channels/{$this->channelId}";
	}


	/**
	 * @param string $channelId Channel ID
	 */
	public function __construct(
		protected string $channelId,
	) {
	}
}
