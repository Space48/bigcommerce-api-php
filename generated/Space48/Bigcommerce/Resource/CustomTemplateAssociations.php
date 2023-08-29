<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomTemplateAssociations\DeleteCustomTemplateAssociations;
use Space48\Bigcommerce\Requests\CustomTemplateAssociations\GetCustomTemplateAssociations;
use Space48\Bigcommerce\Requests\CustomTemplateAssociations\UpsertCustomTemplateAssociations;
use Space48\Bigcommerce\Resource;

class CustomTemplateAssociations extends Resource
{
	/**
	 * @param int $channelId Channel ID to return only custom template associations for a given Channel
	 * @param string $entityIdIn Filter by a list of entity IDs. Must be used together with "type" filter.
	 * @param string $type Filter associations by type
	 * @param bool $isValid Optional toggle to filter for exclusively valid or invalid associations entries. An invalid entry is one where its file name does not match up to an existing custom layout file in the currently active theme for the channel.
	 */
	public function getCustomTemplateAssociations(
		int $channelId,
		string $entityIdIn,
		string $type,
		bool $isValid,
	): Response
	{
		return $this->connector->send(new GetCustomTemplateAssociations($channelId, $entityIdIn, $type, $isValid));
	}


	public function upsertCustomTemplateAssociations(): Response
	{
		return $this->connector->send(new UpsertCustomTemplateAssociations());
	}


	/**
	 * @param int $idIn List of Association IDs to delete explicitly.
	 * @param int $entityIdIn List of Entity IDs to delete explicitly. Must be used together with "type"
	 * @param int $channelId Channel ID provided to delete all custom template associations for a given Channel
	 * @param string $type Filter associations by type
	 */
	public function deleteCustomTemplateAssociations(int $idIn, int $entityIdIn, int $channelId, string $type): Response
	{
		return $this->connector->send(new DeleteCustomTemplateAssociations($idIn, $entityIdIn, $channelId, $type));
	}
}
