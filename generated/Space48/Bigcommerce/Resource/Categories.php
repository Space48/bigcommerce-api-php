<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Categories\CreateCategories;
use Space48\Bigcommerce\Requests\Categories\DeleteTreeCategories;
use Space48\Bigcommerce\Requests\Categories\GetAllCategories;
use Space48\Bigcommerce\Requests\Categories\GetCategoryTreeByTreeId;
use Space48\Bigcommerce\Requests\Categories\UpdateCategories;
use Space48\Bigcommerce\Resource;

class Categories extends Resource
{
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
	public function getAllCategories(
		string $categoryUuidIn,
		string $categoryUuidNotIn,
		string $categoryIdIn,
		string $categoryIdNotIn,
		string $treeIdIn,
		string $treeIdNotIn,
		string $parentIdIn,
		string $parentIdNotIn,
		string $name,
		string $nameLike,
		string $pageTitle,
		string $pageTitleLike,
		string $keyword,
		bool $isVisible,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetAllCategories($categoryUuidIn, $categoryUuidNotIn, $categoryIdIn, $categoryIdNotIn, $treeIdIn, $treeIdNotIn, $parentIdIn, $parentIdNotIn, $name, $nameLike, $pageTitle, $pageTitleLike, $keyword, $isVisible, $includeFields, $excludeFields));
	}


	public function updateCategories(): Response
	{
		return $this->connector->send(new UpdateCategories());
	}


	public function createCategories(): Response
	{
		return $this->connector->send(new CreateCategories());
	}


	/**
	 * @param string $categoryUuidIn
	 * @param string $categoryIdIn
	 * @param string $treeIdIn
	 * @param string $parentIdIn
	 */
	public function deleteTreeCategories(
		string $categoryUuidIn,
		string $categoryIdIn,
		string $treeIdIn,
		string $parentIdIn,
	): Response
	{
		return $this->connector->send(new DeleteTreeCategories($categoryUuidIn, $categoryIdIn, $treeIdIn, $parentIdIn));
	}


	/**
	 * @param string $treeId
	 * @param int $depth Max depth for a tree of categories.
	 */
	public function getCategoryTreeByTreeId(string $treeId, int $depth): Response
	{
		return $this->connector->send(new GetCategoryTreeByTreeId($treeId, $depth));
	}
}
