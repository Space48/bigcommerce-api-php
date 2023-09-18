<?php

namespace Space48\Bigcommerce\Requests\PriceListsAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePriceListAssignments
 *
 * Deletes one or more `Price List Assignments` objects from BigCommerce using a query parameter. You
 * must use at least one query parameter.
 */
class DeletePriceListAssignments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/pricelists/assignments";
	}


	/**
	 * @param null|int $id The ID of the `Price List Assignment`.
	 * @param null|int $priceListId The ID of the `Price List`.
	 * @param null|int $customerGroupId The ID of the `Customer Group`.
	 * @param null|int $channelId The ID of the `Channel`.
	 * @param null|string $channelIdIn Filter results by a comma-separated list of `channel_id`s.
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?int $priceListId = null,
		protected ?int $customerGroupId = null,
		protected ?int $channelId = null,
		protected ?string $channelIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'price_list_id' => $this->priceListId,
			'customer_group_id' => $this->customerGroupId,
			'channel_id' => $this->channelId,
			'channel_id:in' => $this->channelIdIn,
		]);
	}
}
