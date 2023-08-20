<?php

namespace Space48\BigcommerceApi\Requests\FaviconImage;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-favicon-logo-image
 *
 * Uploads an image file to use as the storefront favicon. Supported MIME types include GIF, JPEG, and
 * PNG.
 *
 *   - Channel ID can be used as a query parameter for updating channel-specific setting. If
 * omitted, you will interact with the global setting only.
 */
class PostFaviconLogoImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/settings/favicon/image";
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id' => $this->channelId];
	}
}
