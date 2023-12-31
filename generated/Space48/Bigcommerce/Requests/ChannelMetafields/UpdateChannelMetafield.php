<?php

namespace Space48\Bigcommerce\Requests\ChannelMetafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateChannelMetafield
 *
 * Updates a single channel metafield.
 *
 * **Usage Notes**
 * * Attempting to modify `namespace`, `key`, and
 * `permission_set` fields using a client ID different from the one used to create those metafields
 * will result in a `403` error message.
 */
class UpdateChannelMetafield extends Request
{
	protected Method $method = Method::PUT;


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
