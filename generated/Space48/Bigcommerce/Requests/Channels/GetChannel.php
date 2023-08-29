<?php

namespace Space48\Bigcommerce\Requests\Channels;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannel
 *
 * Returns a *Channel*. Channel ID `1` returns the default BigCommerce storefront.
 */
class GetChannel extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $include Channels subresources that can be included in the response.
	 */
	public function __construct(
		protected int $channelId,
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include' => $this->include];
	}
}
