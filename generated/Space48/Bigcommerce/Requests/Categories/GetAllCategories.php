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
	 * @param null|string $categoryUuidIn
	 * @param null|string $categoryUuidNotIn
	 * @param null|string $categoryIdIn
	 * @param null|string $categoryIdNotIn
	 * @param null|string $treeIdIn
	 * @param null|string $treeIdNotIn
	 * @param null|string $parentIdIn
	 * @param null|string $parentIdNotIn
	 * @param null|string $name
	 * @param null|string $nameLike
	 * @param null|string $pageTitle
	 * @param null|string $pageTitleLike
	 * @param null|string $keyword
	 * @param null|bool $isVisible
	 * @param null|string $includeFields
	 * @param null|string $excludeFields
	 */
	public function __construct(
		protected ?string $categoryUuidIn = null,
		protected ?string $categoryUuidNotIn = null,
		protected ?string $categoryIdIn = null,
		protected ?string $categoryIdNotIn = null,
		protected ?string $treeIdIn = null,
		protected ?string $treeIdNotIn = null,
		protected ?string $parentIdIn = null,
		protected ?string $parentIdNotIn = null,
		protected ?string $name = null,
		protected ?string $nameLike = null,
		protected ?string $pageTitle = null,
		protected ?string $pageTitleLike = null,
		protected ?string $keyword = null,
		protected ?bool $isVisible = null,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
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
		]);
	}
}
