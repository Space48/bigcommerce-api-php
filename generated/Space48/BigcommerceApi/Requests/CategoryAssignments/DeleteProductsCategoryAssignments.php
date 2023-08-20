<?php

namespace Space48\BigcommerceApi\Requests\CategoryAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductsCategoryAssignments
 *
 * Deletes products category assignments. A filter must be supplied.
 */
class DeleteProductsCategoryAssignments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/category-assignments";
	}


	/**
	 * @param string $productIdIn
	 * @param string $categoryIdIn
	 */
	public function __construct(
		protected string $productIdIn,
		protected string $categoryIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['product_id:in' => $this->productIdIn, 'category_id:in' => $this->categoryIdIn];
	}
}
