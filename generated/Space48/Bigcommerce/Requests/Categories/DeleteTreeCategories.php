<?php

namespace Space48\Bigcommerce\Requests\Categories;

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
	 * @param null|string $categoryUuidIn
	 * @param null|string $categoryIdIn
	 * @param null|string $treeIdIn
	 * @param null|string $parentIdIn
	 */
	public function __construct(
		protected ?string $categoryUuidIn = null,
		protected ?string $categoryIdIn = null,
		protected ?string $treeIdIn = null,
		protected ?string $parentIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'category_uuid:in' => $this->categoryUuidIn,
			'category_id:in' => $this->categoryIdIn,
			'tree_id:in' => $this->treeIdIn,
			'parent_id:in' => $this->parentIdIn,
		]);
	}
}
