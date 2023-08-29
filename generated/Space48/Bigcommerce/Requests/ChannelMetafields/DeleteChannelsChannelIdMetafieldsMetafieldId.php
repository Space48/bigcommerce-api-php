<?php

namespace Space48\Bigcommerce\Requests\ChannelMetafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-channels-channel_id-metafields-metafield_id
 *
 * Deletes a single channel metafield.
 */
class DeleteChannelsChannelIdMetafieldsMetafieldId extends Request
{
	protected Method $method = Method::DELETE;


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
