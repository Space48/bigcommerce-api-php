<?php

namespace Space48\BigcommerceApi\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCategory
 *
 * Updates a *Category*.
 *
 * **Required Fields**
 * * none
 *
 * **Read-Only Fields**
 * - id
 */
class UpdateCategory extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function __construct(
		protected int $categoryId,
	) {
	}
}
