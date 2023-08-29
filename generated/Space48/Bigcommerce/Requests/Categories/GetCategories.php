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
	 * @param int $id Filter items by id.
	 * @param array $idIn
	 * @param array $idNotIn
	 * @param array $idMin
	 * @param array $idMax
	 * @param array $idGreater
	 * @param array $idLess
	 * @param string $name Filter items by name.
	 * @param array $nameLike
	 * @param int $parentId Filter items by parent_id. If the category is a child or sub category it can be filtered with the parent_id.
	 * @param array $parentIdIn
	 * @param array $parentIdMin
	 * @param array $parentIdMax
	 * @param array $parentIdGreater
	 * @param array $parentIdLess
	 * @param string $pageTitle Filter items by page_title.
	 * @param array $pageTitleLike
	 * @param string $keyword Filter items by keywords. eg. new, towel, bath
	 * @param bool $isVisible Filter items by if visible on the storefront.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $id,
		protected array $idIn,
		protected array $idNotIn,
		protected array $idMin,
		protected array $idMax,
		protected array $idGreater,
		protected array $idLess,
		protected string $name,
		protected array $nameLike,
		protected int $parentId,
		protected array $parentIdIn,
		protected array $parentIdMin,
		protected array $parentIdMax,
		protected array $parentIdGreater,
		protected array $parentIdLess,
		protected string $pageTitle,
		protected array $pageTitleLike,
		protected string $keyword,
		protected bool $isVisible,
		protected string $includeFields,
		protected string $excludeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return [
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
		];
	}
}
