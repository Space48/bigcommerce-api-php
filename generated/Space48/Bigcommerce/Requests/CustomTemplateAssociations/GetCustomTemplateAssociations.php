<?php

namespace Space48\Bigcommerce\Requests\CustomTemplateAssociations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomTemplateAssociations
 *
 * Get a collection of the storeʼs custom template associations across all storefronts
 */
class GetCustomTemplateAssociations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/storefront/custom-template-associations";
	}


	/**
	 * @param null|int $channelId Channel ID to return only custom template associations for a given Channel
	 * @param null|string $entityIdIn Filter by a list of entity IDs. Must be used together with "type" filter.
	 * @param null|string $type Filter associations by type
	 * @param null|bool $isValid Optional toggle to filter for exclusively valid or invalid associations entries. An invalid entry is one where its file name does not match up to an existing custom layout file in the currently active theme for the channel.
	 */
	public function __construct(
		protected ?int $channelId = null,
		protected ?string $entityIdIn = null,
		protected ?string $type = null,
		protected ?bool $isValid = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'channel_id' => $this->channelId,
			'entity_id:in' => $this->entityIdIn,
			'type' => $this->type,
			'is_valid' => $this->isValid,
		]);
	}
}
