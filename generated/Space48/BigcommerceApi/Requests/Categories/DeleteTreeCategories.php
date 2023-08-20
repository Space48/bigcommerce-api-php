<?php

namespace Space48\BigcommerceApi\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteTreeCategories
 *
 * Deletes categories.
 *
 * To delete a specific category in a tree, provide a category ID.
 */
class DeleteTreeCategories extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees/categories";
	}


	/**
	 * @param string $categoryUuidIn
	 * @param string $categoryIdIn
	 * @param string $treeIdIn
	 * @param string $parentIdIn
	 */
	public function __construct(
		protected string $categoryUuidIn,
		protected string $categoryIdIn,
		protected string $treeIdIn,
		protected string $parentIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'category_uuid:in' => $this->categoryUuidIn,
			'category_id:in' => $this->categoryIdIn,
			'tree_id:in' => $this->treeIdIn,
			'parent_id:in' => $this->parentIdIn,
		];
	}
}
