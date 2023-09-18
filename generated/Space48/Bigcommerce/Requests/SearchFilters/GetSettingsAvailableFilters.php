<?php

namespace Space48\Bigcommerce\Requests\SearchFilters;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSettingsAvailableFilters
 *
 * Returns a list of filters available to power [Product
 * Filtering](https://support.bigcommerce.com/s/article/Product-Filtering-Settings).
 */
class GetSettingsAvailableFilters extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/search/filters/available";
	}


	/**
	 * @param null|int $channelId Narrows the list of available filters based on channel ID. Only products currently assigned to the given Channel will be considered.
	 * @param null|int $categoryId Narrows the list of available filters based on category ID. You can display settings to show products from the provided category, subcategories only, or both the category and its child categories.
	 */
	public function __construct(
		protected ?int $channelId = null,
		protected ?int $categoryId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['channel_id' => $this->channelId, 'category_id' => $this->categoryId]);
	}
}
