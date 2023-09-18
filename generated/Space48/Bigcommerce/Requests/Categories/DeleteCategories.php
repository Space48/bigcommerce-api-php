<?php

namespace Space48\Bigcommerce\Requests\Categories;

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
	 * @param null|int $id Filter items by id.
	 * @param null|array $idIn
	 * @param null|array $idNotIn
	 * @param null|array $idMin
	 * @param null|array $idMax
	 * @param null|array $idGreater
	 * @param null|array $idLess
	 * @param null|string $name Filter items by name.
	 * @param null|int $parentId Filter items by parent_id. If the category is a child or sub category it can be filtered with the parent_id.
	 * @param null|string $pageTitle Filter items by page_title.
	 * @param null|string $keyword Filter items by keywords. eg. new, towel, bath
	 * @param null|bool $isVisible Filter items by if visible on the storefront.
	 * @param null|array $nameLike
	 * @param null|array $parentIdIn
	 * @param null|array $parentIdMin
	 * @param null|array $parentIdMax
	 * @param null|array $parentIdGreater
	 * @param null|array $parentIdLess
	 * @param null|array $pageTitleLike
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
		protected ?int $parentId = null,
		protected ?string $pageTitle = null,
		protected ?string $keyword = null,
		protected ?bool $isVisible = null,
		protected ?array $nameLike = null,
		protected ?array $parentIdIn = null,
		protected ?array $parentIdMin = null,
		protected ?array $parentIdMax = null,
		protected ?array $parentIdGreater = null,
		protected ?array $parentIdLess = null,
		protected ?array $pageTitleLike = null,
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
		]);
	}
}
