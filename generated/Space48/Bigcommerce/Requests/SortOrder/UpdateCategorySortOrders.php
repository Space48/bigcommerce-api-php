<?php

namespace Space48\Bigcommerce\Requests\SortOrder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCategorySortOrders
 *
 * Updates sort order of products within a specific category.
 */
class UpdateCategorySortOrders extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/products/sort-order";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function __construct(
		protected int $categoryId,
	) {
	}
}
