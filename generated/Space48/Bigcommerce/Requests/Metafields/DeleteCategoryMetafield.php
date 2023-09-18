<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCategoryMetafield
 *
 * Deletes a *Category Metafield*.
 */
class DeleteCategoryMetafield extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $categoryId,
		protected int $metafieldId,
	) {
	}
}
