<?php

namespace Space48\Bigcommerce\Requests\AbandonedCartEmails;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAbandonedCartEmailTemplates
 *
 * An array of abandoned cart emails pertaining to a store.
 */
class GetAbandonedCartEmailTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/marketing/abandoned-cart-emails";
	}


	/**
	 * @param null|int $channelId Channel ID to use for channel-level data.
	 */
	public function __construct(
		protected ?int $channelId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['channel_id' => $this->channelId]);
	}
}
