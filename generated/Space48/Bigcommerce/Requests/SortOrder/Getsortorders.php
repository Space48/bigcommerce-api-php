<?php

namespace Space48\Bigcommerce\Requests\SortOrder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getsortorders
 *
 * Returns a list of products and their sort order for a specific category.
 *
 * **Usage Notes**
 * * Data
 * pairs are displayed in ascending order based on products' `sort_order` values.
 * * `null` values are
 * allowed for products without specified `sort_order` values.
 * * Products with `sort_order` value of
 * `null` will be displayed after products with valid numerical values.
 * * The priorities for
 * determining product sort order on a storefront are the following:
 *   - Priority 1: Manually specified
 * sort order on Category Level (API).
 *   - Priority 2: Manually specified sort order on Product
 * (Global) Level (UI/API).
 *   - Priority 3: Default sorting by Product ID (newly added products go
 * first) (UI/API).
 */
class Getsortorders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/products/sort-order";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function __construct(
		protected int $categoryId,
	) {
	}
}
