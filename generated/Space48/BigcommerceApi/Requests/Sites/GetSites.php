<?php

namespace Space48\BigcommerceApi\Requests\Sites;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Sites
 *
 * Get sites linked to a [headless storefront](/api-docs/storefronts/developers-guide-headless) sales
 * channels.
 */
class GetSites extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sites";
	}


	/**
	 * @param int $channelIdIn Filters returned sites by channel ID.
	 * @param string $urlTypeIn Filters sites returned in the `data.urls` array by their URL type.
	 */
	public function __construct(
		protected int $channelIdIn,
		protected string $urlTypeIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id:in' => $this->channelIdIn, 'url_type:in' => $this->urlTypeIn];
	}
}
