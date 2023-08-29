<?php

namespace Space48\Bigcommerce\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllCategories
 *
 * Returns a list of categories.
 *
 * To get a specific category in a tree, provide a category ID.
 */
class GetAllCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees/categories";
	}


	/**
	 * @param string $categoryUuidIn
	 * @param string $categoryUuidNotIn
	 * @param string $categoryIdIn
	 * @param string $categoryIdNotIn
	 * @param string $treeIdIn
	 * @param string $treeIdNotIn
	 * @param string $parentIdIn
	 * @param string $parentIdNotIn
	 * @param string $name
	 * @param string $nameLike
	 * @param string $pageTitle
	 * @param string $pageTitleLike
	 * @param string $keyword
	 * @param bool $isVisible
	 * @param string $includeFields
	 * @param string $excludeFields
	 */
	public function __construct(
		protected string $categoryUuidIn,
		protected string $categoryUuidNotIn,
		protected string $categoryIdIn,
		protected string $categoryIdNotIn,
		protected string $treeIdIn,
		protected string $treeIdNotIn,
		protected string $parentIdIn,
		protected string $parentIdNotIn,
		protected string $name,
		protected string $nameLike,
		protected string $pageTitle,
		protected string $pageTitleLike,
		protected string $keyword,
		protected bool $isVisible,
		protected string $includeFields,
		protected string $excludeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'category_uuid:in' => $this->categoryUuidIn,
			'category_uuid:not_in' => $this->categoryUuidNotIn,
			'category_id:in' => $this->categoryIdIn,
			'category_id:not_in' => $this->categoryIdNotIn,
			'tree_id:in' => $this->treeIdIn,
			'tree_id:not_in' => $this->treeIdNotIn,
			'parent_id:in' => $this->parentIdIn,
			'parent_id:not_in' => $this->parentIdNotIn,
			'name' => $this->name,
			'name:like' => $this->nameLike,
			'page_title' => $this->pageTitle,
			'page_title:like' => $this->pageTitleLike,
			'keyword' => $this->keyword,
			'is_visible' => $this->isVisible,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
		];
	}
}
