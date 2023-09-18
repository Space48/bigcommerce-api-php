<?php

namespace Space48\Bigcommerce\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCategories
 *
 * Returns a list of *Categories*. Optional filter parameters can be passed in.
 */
class GetCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories";
	}


	/**
	 * @param null|int $id Filter items by id.
	 * @param null|array $idIn
	 * @param null|array $idNotIn
	 * @param null|array $idMin
	 * @param null|array $idMax
	 * @param null|array $idGreater
	 * @param null|array $idLess
	 * @param null|string $name Filter items by name.
	 * @param null|array $nameLike
	 * @param null|int $parentId Filter items by parent_id. If the category is a child or sub category it can be filtered with the parent_id.
	 * @param null|array $parentIdIn
	 * @param null|array $parentIdMin
	 * @param null|array $parentIdMax
	 * @param null|array $parentIdGreater
	 * @param null|array $parentIdLess
	 * @param null|string $pageTitle Filter items by page_title.
	 * @param null|array $pageTitleLike
	 * @param null|string $keyword Filter items by keywords. eg. new, towel, bath
	 * @param null|bool $isVisible Filter items by if visible on the storefront.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param null|string $sort Controls the sort order of the response, for example, `sort=name`.
	 *
	 * Allowed values:
	 * - `name`: sort categories in alphabetical order by category name.
	 * - `id`: sort in ascending order by category ID.
	 * - `parent_id`: sort in ascending order by the ID of the parent category.
	 * - `sort_order`: sort in ascending order by sort order value.
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?array $idIn = null,
		protected ?array $idNotIn = null,
		protected ?array $idMin = null,
		protected ?array $idMax = null,
		protected ?array $idGreater = null,
		protected ?array $idLess = null,
		protected ?string $name = null,
		protected ?array $nameLike = null,
		protected ?int $parentId = null,
		protected ?array $parentIdIn = null,
		protected ?array $parentIdMin = null,
		protected ?array $parentIdMax = null,
		protected ?array $parentIdGreater = null,
		protected ?array $parentIdLess = null,
		protected ?string $pageTitle = null,
		protected ?array $pageTitleLike = null,
		protected ?string $keyword = null,
		protected ?bool $isVisible = null,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
		protected ?string $sort = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'id:in' => $this->idIn,
			'id:not_in' => $this->idNotIn,
			'id:min' => $this->idMin,
			'id:max' => $this->idMax,
			'id:greater' => $this->idGreater,
			'id:less' => $this->idLess,
			'name' => $this->name,
			'name:like' => $this->nameLike,
			'parent_id' => $this->parentId,
			'parent_id:in' => $this->parentIdIn,
			'parent_id:min' => $this->parentIdMin,
			'parent_id:max' => $this->parentIdMax,
			'parent_id:greater' => $this->parentIdGreater,
			'parent_id:less' => $this->parentIdLess,
			'page_title' => $this->pageTitle,
			'page_title:like' => $this->pageTitleLike,
			'keyword' => $this->keyword,
			'is_visible' => $this->isVisible,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
			'sort' => $this->sort,
		]);
	}
}
