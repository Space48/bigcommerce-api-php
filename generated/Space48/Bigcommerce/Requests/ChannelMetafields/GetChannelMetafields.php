<?php

namespace Space48\Bigcommerce\Requests\ChannelMetafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelMetafields
 *
 * Returns a list of metafields on a channel. Optional filter parameters can be passed in.
 */
class GetChannelMetafields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/metafields";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param null|string $key Filter based on a metafield's key.
	 * @param null|string $namespace Filter based on a metafield's namespace.
	 * @param null|string $direction Sort direction.
	 */
	public function __construct(
		protected int $channelId,
		protected ?string $key = null,
		protected ?string $namespace = null,
		protected ?string $direction = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key, 'namespace' => $this->namespace, 'direction' => $this->direction]);
	}
}
