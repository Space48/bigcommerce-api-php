<?php

namespace Space48\BigcommerceApi\Requests\SortOrder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updatesortorder
 *
 * Updates sort order of products within a specific category.
 */
class Updatesortorder extends Request
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
