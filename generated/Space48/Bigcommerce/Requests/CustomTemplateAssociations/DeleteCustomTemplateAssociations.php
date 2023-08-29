<?php

namespace Space48\Bigcommerce\Requests\CustomTemplateAssociations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCustomTemplateAssociations
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
	 * @param int $idIn List of Association IDs to delete explicitly.
	 * @param int $entityIdIn List of Entity IDs to delete explicitly. Must be used together with "type"
	 * @param int $channelId Channel ID provided to delete all custom template associations for a given Channel
	 * @param string $type Filter associations by type
	 */
	public function __construct(
		protected int $idIn,
		protected int $entityIdIn,
		protected int $channelId,
		protected string $type,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id:in' => $this->idIn, 'entity_id:in' => $this->entityIdIn, 'channel_id' => $this->channelId, 'type' => $this->type];
	}
}
