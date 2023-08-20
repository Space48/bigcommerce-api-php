<?php

namespace Space48\BigcommerceApi\Requests\ChannelMetafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-channels-channel_id-metafields-metafield_id
 *
 * Returns a single channel metafield.
 */
class GetChannelsChannelIdMetafieldsMetafieldId extends Request
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
