<?php

namespace Space48\Bigcommerce\Requests\Images;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCategoryImage
 *
 * Deletes a *Cateogory Image*.
 */
class DeleteCategoryImage extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/image";
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
