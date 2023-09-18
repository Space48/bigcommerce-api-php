<?php

namespace Space48\Bigcommerce\Requests\CustomTemplateAssociations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomTemplateAssociations
 *
 * Delete custom template associations. At least one query parameter must be used.
 */
class DeleteCustomTemplateAssociations extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/storefront/custom-template-associations";
	}


	/**
	 * @param null|int $idIn List of Association IDs to delete explicitly.
	 * @param null|int $entityIdIn List of Entity IDs to delete explicitly. Must be used together with "type"
	 * @param null|int $channelId Channel ID provided to delete all custom template associations for a given Channel
	 * @param null|string $type Filter associations by type
	 */
	public function __construct(
		protected ?int $idIn = null,
		protected ?int $entityIdIn = null,
		protected ?int $channelId = null,
		protected ?string $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn, 'entity_id:in' => $this->entityIdIn, 'channel_id' => $this->channelId, 'type' => $this->type]);
	}
}
