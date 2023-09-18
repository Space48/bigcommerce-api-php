<?php

namespace Space48\Bigcommerce\Requests\ChannelSiteCheckoutUrl;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCheckoutUrl
 *
 * Deletes a siteʼs checkout URL. After deletion, a shared checkout URL is used.
 */
class DeleteCheckoutUrl extends Request
{
	protected Method $method = Method::DELETE;


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
