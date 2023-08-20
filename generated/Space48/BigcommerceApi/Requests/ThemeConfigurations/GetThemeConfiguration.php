<?php

namespace Space48\BigcommerceApi\Requests\ThemeConfigurations;

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
	 * @param string $uuid
	 * @param string $uuid The theme identifier.
	 * @param array $uuidIn Filter configurations by a list of configuration UUIDs.
	 * @param array $channelIdIn Filter configurations by a list of channel_ids.
	 * @param string $variationUuid Filter configurations by a variation_uuid.
	 */
	public function __construct(
		protected string $uuid,
		protected array $uuidIn,
		protected array $channelIdIn,
		protected string $variationUuid,
	) {
	}


	public function defaultQuery(): array
	{
		return ['uuid:in' => $this->uuidIn, 'channel_id:in' => $this->channelIdIn, 'variation_uuid' => $this->variationUuid];
	}
}
