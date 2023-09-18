<?php

namespace Space48\Bigcommerce\Requests\LogoImage;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createSettingsLogoImage
 *
 * Uploads an image file to use as the storefront logo. Supported MIME types include GIF, JPEG, and
 * PNG.
 *
 *  - Channel ID can be used as a query parameter for updating channel-specific setting. If
 * omitted, you will interact with the global setting only.
 */
class CreateSettingsLogoImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/settings/logo/image";
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
