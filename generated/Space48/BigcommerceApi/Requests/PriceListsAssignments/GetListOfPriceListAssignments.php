<?php

namespace Space48\BigcommerceApi\Requests\PriceListsAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetListOfPriceListAssignments
 *
 * Fetches an array of `Price List Assignments` matching a particular Customer Group and Price List and
 * Channel.
 */
class GetListOfPriceListAssignments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pricelists/assignments";
	}


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
	public function __construct(
		protected int $id,
		protected int $priceListId,
		protected int $customerGroupId,
		protected int $channelId,
		protected array $idIn,
		protected array $customerGroupIdIn,
		protected array $priceListIdIn,
		protected array $channelIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'id' => $this->id,
			'price_list_id' => $this->priceListId,
			'customer_group_id' => $this->customerGroupId,
			'channel_id' => $this->channelId,
			'id:in' => $this->idIn,
			'customer_group_id:in' => $this->customerGroupIdIn,
			'price_list_id:in' => $this->priceListIdIn,
			'channel_id:in' => $this->channelIdIn,
		];
	}
}
