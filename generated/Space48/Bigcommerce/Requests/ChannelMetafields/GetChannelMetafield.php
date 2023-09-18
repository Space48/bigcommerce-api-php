<?php

namespace Space48\Bigcommerce\Requests\ChannelMetafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelMetafield
 *
 * Returns a single channel metafield.
 */
class GetChannelMetafield extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $metafieldId
	 */
	public function __construct(
		protected int $channelId,
		protected string $metafieldId,
	) {
	}
}
