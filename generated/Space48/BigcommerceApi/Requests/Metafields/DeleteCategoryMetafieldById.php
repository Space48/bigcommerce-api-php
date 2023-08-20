<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCategoryMetafieldById
 *
 * Deletes a *Category Metafield*.
 */
class DeleteCategoryMetafieldById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 * @param int $metafieldId The ID of the `Metafield`.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $categoryId,
		protected int $metafieldId,
	) {
	}
}
