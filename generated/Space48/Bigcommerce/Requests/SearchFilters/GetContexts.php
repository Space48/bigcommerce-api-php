<?php

namespace Space48\Bigcommerce\Requests\SearchFilters;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getContexts
 *
 * Returns a list of contextual filters enabled for a particular channel or category.
 *
 * **Usage
 * Notes**
 *
 * Contextual filters allow you to configure the enabled filters per channel or category, so
 * that shoppers can filter by the most relevant criteria.
 *
 * The order of the returned filters will
 * match the sort order of the filters on the storefront.
 */
class GetContexts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/settings/search/filters/contexts";
	}


	/**
	 * @param int $channelId Only return contextual overrides related to a particular Channel.
	 * @param int $categoryId Only return contextual overrides related to a particular Category.
	 */
	public function __construct(
		protected int $channelId,
		protected int $categoryId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id' => $this->channelId, 'category_id' => $this->categoryId];
	}
}
