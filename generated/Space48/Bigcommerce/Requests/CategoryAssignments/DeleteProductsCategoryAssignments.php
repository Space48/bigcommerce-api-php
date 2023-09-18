<?php

namespace Space48\Bigcommerce\Requests\CategoryAssignments;

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
	 * @param null|string $productIdIn
	 * @param null|string $categoryIdIn
	 */
	public function __construct(
		protected ?string $productIdIn = null,
		protected ?string $categoryIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['product_id:in' => $this->productIdIn, 'category_id:in' => $this->categoryIdIn]);
	}
}
