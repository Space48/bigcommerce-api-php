<?php

namespace Space48\Bigcommerce\Requests\StorefrontCategory;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update Storefront Category Settings
 *
 * Updates category settings.
 *
 *  - Channel ID can be used as a query parameter for updating
 * channel-specific setting. If omitted, you will interact with the global setting only.
 *
 *  - `null`
 * should be supplied to delete overrides per given channel and to inherit values from global level.
 * Partial updates are not supported and all settings should be supplied with `null` value in order to
 * delete overrides per channel.
 */
class UpdateStorefrontCategorySettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/settings/storefront/category";
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
