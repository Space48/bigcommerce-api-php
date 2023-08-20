<?php

namespace Space48\BigcommerceApi\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCategories
 *
 * Deletes *Category* objects. At least one filter parameter is required to perform the `DELETE`
 * operation.
 *
 * **Usage Notes**
 *
 * - Sending a `DELETE`request without specifying a filter parameter will
 * result in a `422` error.
 * - Sending a `DELETE` request for a category that contains products will
 * result in a `422` error. Move products to a new category by sending a `PUT` request to the
 * `/catalog/products/{product_id}` endpoint before deleting a category.
 */
class DeleteCategories extends Request
{
	protected Method $method = Method::DELETE;


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
	 * @param int $parentId Filter items by parent_id. If the category is a child or sub category it can be filtered with the parent_id.
	 * @param string $pageTitle Filter items by page_title.
	 * @param string $keyword Filter items by keywords. eg. new, towel, bath
	 * @param bool $isVisible Filter items by if visible on the storefront.
	 * @param array $nameLike
	 * @param array $parentIdIn
	 * @param array $parentIdMin
	 * @param array $parentIdMax
	 * @param array $parentIdGreater
	 * @param array $parentIdLess
	 * @param array $pageTitleLike
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
		protected int $parentId,
		protected string $pageTitle,
		protected string $keyword,
		protected bool $isVisible,
		protected array $nameLike,
		protected array $parentIdIn,
		protected array $parentIdMin,
		protected array $parentIdMax,
		protected array $parentIdGreater,
		protected array $parentIdLess,
		protected array $pageTitleLike,
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
			'parent_id' => $this->parentId,
			'page_title' => $this->pageTitle,
			'keyword' => $this->keyword,
			'is_visible' => $this->isVisible,
			'name:like' => $this->nameLike,
			'parent_id:in' => $this->parentIdIn,
			'parent_id:min' => $this->parentIdMin,
			'parent_id:max' => $this->parentIdMax,
			'parent_id:greater' => $this->parentIdGreater,
			'parent_id:less' => $this->parentIdLess,
			'page_title:like' => $this->pageTitleLike,
		];
	}
}
