<?php

namespace Space48\Bigcommerce\Requests\PriceListsAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListOfPriceListAssignments
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
	 * @param null|int $id The ID of the `Price List Assignment`.
	 * @param null|int $priceListId The ID of the `Price List`.
	 * @param null|int $customerGroupId The ID of the `Customer Group`.
	 * @param null|int $channelId The ID of the `Channel`.
	 * @param null|array $idIn Filter items by a comma-separated list of `id`s.
	 * @param null|array $customerGroupIdIn Filter items by a comma-separated list of `customer_group_id`s.
	 * @param null|array $priceListIdIn Filter items by a comma-separated list of `price_list_id`s.
	 * @param null|array $channelIdIn Filter items by a comma-separated list of `channel_id`s.
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?int $priceListId = null,
		protected ?int $customerGroupId = null,
		protected ?int $channelId = null,
		protected ?array $idIn = null,
		protected ?array $customerGroupIdIn = null,
		protected ?array $priceListIdIn = null,
		protected ?array $channelIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'price_list_id' => $this->priceListId,
			'customer_group_id' => $this->customerGroupId,
			'channel_id' => $this->channelId,
			'id:in' => $this->idIn,
			'customer_group_id:in' => $this->customerGroupIdIn,
			'price_list_id:in' => $this->priceListIdIn,
			'channel_id:in' => $this->channelIdIn,
		]);
	}
}
