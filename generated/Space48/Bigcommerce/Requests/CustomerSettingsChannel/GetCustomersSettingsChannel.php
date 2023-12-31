<?php

namespace Space48\Bigcommerce\Requests\CustomerSettingsChannel;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomersSettingsChannel
 *
 * Returns the customer settings per channel.
 *
 * **Notes**
 *
 *  * `null` indicates that there is no override
 * per given channel and values are inherited from the global level.
 */
class GetCustomersSettingsChannel extends Request
{
	protected Method $method = Method::GET;


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
