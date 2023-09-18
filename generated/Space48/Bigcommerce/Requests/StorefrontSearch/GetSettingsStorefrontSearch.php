<?php

namespace Space48\Bigcommerce\Requests\StorefrontSearch;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSettingsStorefrontSearch
 *
 * Returns search settings.
 *
 *  - Channel ID can be used as a query parameter for getting
 * channel-specific setting. If omitted, you will interact with the global setting only.
 *
 *  - `null`
 * indicates that a particular field has not been overridden on a channel level when channel level
 * settings are requested and values are inherited from global level.
 */
class GetSettingsStorefrontSearch extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/storefront/search";
	}


	/**
	 * @param null|int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
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