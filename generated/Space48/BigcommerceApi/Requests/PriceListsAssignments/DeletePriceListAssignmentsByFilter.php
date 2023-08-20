<?php

namespace Space48\BigcommerceApi\Requests\PriceListsAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePriceListAssignmentsByFilter
 *
 * Deletes one or more `Price List Assignments` objects from BigCommerce using a query parameter. You
 * must use at least one query parameter.
 */
class DeletePriceListAssignmentsByFilter extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/pricelists/assignments";
	}


	/**
	 * @param int $id The ID of the `Price List Assignment`.
	 * @param int $priceListId The ID of the `Price List`.
	 * @param int $customerGroupId The ID of the `Customer Group`.
	 * @param int $channelId The ID of the `Channel`.
	 * @param string $channelIdIn Filter results by a comma-separated list of `channel_id`s.
	 */
	public function __construct(
		protected int $id,
		protected int $priceListId,
		protected int $customerGroupId,
		protected int $channelId,
		protected string $channelIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'id' => $this->id,
			'price_list_id' => $this->priceListId,
			'customer_group_id' => $this->customerGroupId,
			'channel_id' => $this->channelId,
			'channel_id:in' => $this->channelIdIn,
		];
	}
}
