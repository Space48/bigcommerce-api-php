<?php

namespace Space48\Bigcommerce\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCategory
 *
 * Deletes a *Category*.
 */
class DeleteCategory extends Request
{
	protected Method $method = Method::DELETE;


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
