<?php

namespace Space48\Bigcommerce\Requests\ChannelSiteCheckoutUrl;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * putCheckoutUrl
 *
 * Creates or updates (upserts) a site's checkout URL
 */
class PutCheckoutUrl extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/site/checkout-url";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
