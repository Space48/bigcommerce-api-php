<?php

namespace Space48\Bigcommerce\Requests\AbandonedCartEmails;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAbandonedCartEmails
 *
 * An array of abandoned cart emails pertaining to a store.
 */
class GetAbandonedCartEmails extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/marketing/abandoned-cart-emails";
	}


	/**
	 * @param int $channelId Channel ID to use for channel-level data.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id' => $this->channelId];
	}
}
