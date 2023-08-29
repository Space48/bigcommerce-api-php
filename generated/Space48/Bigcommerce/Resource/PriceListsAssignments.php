<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PriceListsAssignments\CreatePriceListAssignments;
use Space48\Bigcommerce\Requests\PriceListsAssignments\DeletePriceListAssignmentsByFilter;
use Space48\Bigcommerce\Requests\PriceListsAssignments\GetListOfPriceListAssignments;
use Space48\Bigcommerce\Requests\PriceListsAssignments\UpsertPriceListAssignment;
use Space48\Bigcommerce\Resource;

class PriceListsAssignments extends Resource
{
	/**
	 * @param int $id The ID of the `Price List Assignment`.
	 * @param int $priceListId The ID of the `Price List`.
	 * @param int $customerGroupId The ID of the `Customer Group`.
	 * @param int $channelId The ID of the `Channel`.
	 * @param array $idIn Filter items by a comma-separated list of `id`s.
	 * @param array $customerGroupIdIn Filter items by a comma-separated list of `customer_group_id`s.
	 * @param array $priceListIdIn Filter items by a comma-separated list of `price_list_id`s.
	 * @param array $channelIdIn Filter items by a comma-separated list of `channel_id`s.
	 */
	public function getListOfPriceListAssignments(
		int $id,
		int $priceListId,
		int $customerGroupId,
		int $channelId,
		array $idIn,
		array $customerGroupIdIn,
		array $priceListIdIn,
		array $channelIdIn,
	): Response
	{
		return $this->connector->send(new GetListOfPriceListAssignments($id, $priceListId, $customerGroupId, $channelId, $idIn, $customerGroupIdIn, $priceListIdIn, $channelIdIn));
	}


	public function createPriceListAssignments(): Response
	{
		return $this->connector->send(new CreatePriceListAssignments());
	}


	/**
	 * @param int $id The ID of the `Price List Assignment`.
	 * @param int $priceListId The ID of the `Price List`.
	 * @param int $customerGroupId The ID of the `Customer Group`.
	 * @param int $channelId The ID of the `Channel`.
	 * @param string $channelIdIn Filter results by a comma-separated list of `channel_id`s.
	 */
	public function deletePriceListAssignmentsByFilter(
		int $id,
		int $priceListId,
		int $customerGroupId,
		int $channelId,
		string $channelIdIn,
	): Response
	{
		return $this->connector->send(new DeletePriceListAssignmentsByFilter($id, $priceListId, $customerGroupId, $channelId, $channelIdIn));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 */
	public function upsertPriceListAssignment(int $priceListId): Response
	{
		return $this->connector->send(new UpsertPriceListAssignment($priceListId));
	}
}
