<?php

namespace Space48\BigcommerceApi\Requests\Images;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCategoryImage
 *
 * Create a *Category Image*.
 *
 *  **Required Fields**
 * - image_file: Form posts are the only accepted
 * upload option.
 *
 * Only one image at a time can be created.
 * Limit image size to 1MB.
 * To update a
 * *Category Image*, use the [Update
 * categories](/docs/rest-catalog/category-trees/categories#update-categories) endpoint and an
 * `image_url`.
 */
class CreateCategoryImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/image";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function __construct(
		protected int $categoryId,
	) {
	}
}
