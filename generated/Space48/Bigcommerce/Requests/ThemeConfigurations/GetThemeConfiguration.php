<?php

namespace Space48\Bigcommerce\Requests\ThemeConfigurations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Theme Configuration
 *
 * Returns a list of theme's configurations.
 *
 * **Usage Notes**:
 * * At least one filter must be provided.
 */
class GetThemeConfiguration extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/themes/{$this->uuid}/configurations";
	}


	/**
	 * @param string $uuid The theme identifier.
	 * @param null|array $uuidIn Filter configurations by a list of configuration UUIDs.
	 * @param null|array $channelIdIn Filter configurations by a list of channel_ids.
	 * @param null|string $variationUuid Filter configurations by a variation_uuid.
	 */
	public function __construct(
		protected string $uuid,
		protected ?array $uuidIn = null,
		protected ?array $channelIdIn = null,
		protected ?string $variationUuid = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['uuid:in' => $this->uuidIn, 'channel_id:in' => $this->channelIdIn, 'variation_uuid' => $this->variationUuid]);
	}
}
