<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Categories\CreateCategory;
use Space48\Bigcommerce\Requests\Categories\DeleteCategories;
use Space48\Bigcommerce\Requests\Categories\DeleteCategory;
use Space48\Bigcommerce\Requests\Categories\GetCategories;
use Space48\Bigcommerce\Requests\Categories\GetCategory;
use Space48\Bigcommerce\Requests\Categories\UpdateCategory;
use Space48\Bigcommerce\Resource;

class Categories extends Resource
{
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
	 * @param string $sort Controls the sort order of the response, for example, `sort=name`.
	 *
	 * Allowed values:
	 * - `name`: sort categories in alphabetical order by category name.
	 * - `id`: sort in ascending order by category ID.
	 * - `parent_id`: sort in ascending order by the ID of the parent category.
	 * - `sort_order`: sort in ascending order by sort order value.
	 */
	public function getCategories(
		?int $id,
		?array $idIn,
		?array $idNotIn,
		?array $idMin,
		?array $idMax,
		?array $idGreater,
		?array $idLess,
		?string $name,
		?array $nameLike,
		?int $parentId,
		?array $parentIdIn,
		?array $parentIdMin,
		?array $parentIdMax,
		?array $parentIdGreater,
		?array $parentIdLess,
		?string $pageTitle,
		?array $pageTitleLike,
		?string $keyword,
		?bool $isVisible,
		?string $includeFields,
		?string $excludeFields,
		?string $sort,
	): Response
	{
		return $this->connector->send(new GetCategories($id, $idIn, $idNotIn, $idMin, $idMax, $idGreater, $idLess, $name, $nameLike, $parentId, $parentIdIn, $parentIdMin, $parentIdMax, $parentIdGreater, $parentIdLess, $pageTitle, $pageTitleLike, $keyword, $isVisible, $includeFields, $excludeFields, $sort));
	}


	public function createCategory(): Response
	{
		return $this->connector->send(new CreateCategory());
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
	public function deleteCategories(
		?int $id,
		?array $idIn,
		?array $idNotIn,
		?array $idMin,
		?array $idMax,
		?array $idGreater,
		?array $idLess,
		?string $name,
		?int $parentId,
		?string $pageTitle,
		?string $keyword,
		?bool $isVisible,
		?array $nameLike,
		?array $parentIdIn,
		?array $parentIdMin,
		?array $parentIdMax,
		?array $parentIdGreater,
		?array $parentIdLess,
		?array $pageTitleLike,
	): Response
	{
		return $this->connector->send(new DeleteCategories($id, $idIn, $idNotIn, $idMin, $idMax, $idGreater, $idLess, $name, $parentId, $pageTitle, $keyword, $isVisible, $nameLike, $parentIdIn, $parentIdMin, $parentIdMax, $parentIdGreater, $parentIdLess, $pageTitleLike));
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getCategory(int $categoryId, ?string $includeFields, ?string $excludeFields): Response
	{
		return $this->connector->send(new GetCategory($categoryId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function updateCategory(int $categoryId): Response
	{
		return $this->connector->send(new UpdateCategory($categoryId));
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function deleteCategory(int $categoryId): Response
	{
		return $this->connector->send(new DeleteCategory($categoryId));
	}
}
