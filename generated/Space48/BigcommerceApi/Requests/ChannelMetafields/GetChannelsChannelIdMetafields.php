<?php

namespace Space48\BigcommerceApi\Requests\ChannelMetafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-channels-channel_id-metafields
 *
 * Returns a list of metafields on a channel. Optional filter parameters can be passed in.
 */
class GetChannelsChannelIdMetafields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/metafields";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $key Filter based on a metafield's key.
	 * @param string $namespace Filter based on a metafield's namespace.
	 * @param string $direction Sort direction.
	 */
	public function __construct(
		protected int $channelId,
		protected string $key,
		protected string $namespace,
		protected string $direction,
	) {
	}


	public function defaultQuery(): array
	{
		return ['key' => $this->key, 'namespace' => $this->namespace, 'direction' => $this->direction];
	}
}
