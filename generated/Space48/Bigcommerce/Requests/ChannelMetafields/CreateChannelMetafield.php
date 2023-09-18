<?php

namespace Space48\Bigcommerce\Requests\ChannelMetafields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createChannelMetafield
 *
 * Creates a channel metafield.
 *
 * **Note:** The maxiumum number of metafields allowed on each order,
 * product, category, variant, channel, or brand is 250 per client ID. For more information, see
 * [Platform Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.
 */
class CreateChannelMetafield extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/metafields";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
