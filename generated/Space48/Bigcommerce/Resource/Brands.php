<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Brands\CreateBrand;
use Space48\Bigcommerce\Requests\Brands\DeleteBrand;
use Space48\Bigcommerce\Requests\Brands\DeleteBrands;
use Space48\Bigcommerce\Requests\Brands\GetBrandById;
use Space48\Bigcommerce\Requests\Brands\GetBrands;
use Space48\Bigcommerce\Requests\Brands\UpdateBrand;
use Space48\Bigcommerce\Resource;

class Brands extends Resource
{
	/**
	 * @param int $id Filter items by ID.
	 * @param array $idIn
	 * @param array $idNotIn
	 * @param array $idMin
	 * @param array $idMax
	 * @param array $idGreater
	 * @param array $idLess
	 * @param string $name Filter items by name.
	 * @param string $nameLike Filter items by part of a name. For example, `name:like=new` returns brands with names that include `new`.
	 * @param string $pageTitle Filter items by page_title.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param string $sort Field name to sort by.
	 */
	public function getBrands(
		?int $id,
		?array $idIn,
		?array $idNotIn,
		?array $idMin,
		?array $idMax,
		?array $idGreater,
		?array $idLess,
		?string $name,
		?string $nameLike,
		?string $pageTitle,
		?string $includeFields,
		?string $excludeFields,
		?string $sort,
	): Response
	{
		return $this->connector->send(new GetBrands($id, $idIn, $idNotIn, $idMin, $idMax, $idGreater, $idLess, $name, $nameLike, $pageTitle, $includeFields, $excludeFields, $sort));
	}


	public function createBrand(): Response
	{
		return $this->connector->send(new CreateBrand());
	}


	/**
	 * @param string $name Filter items by name.
	 * @param string $pageTitle Filter items by page_title.
	 */
	public function deleteBrands(?string $name, ?string $pageTitle): Response
	{
		return $this->connector->send(new DeleteBrands($name, $pageTitle));
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getBrandById(int $brandId, ?string $includeFields, ?string $excludeFields): Response
	{
		return $this->connector->send(new GetBrandById($brandId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 */
	public function updateBrand(int $brandId): Response
	{
		return $this->connector->send(new UpdateBrand($brandId));
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 */
	public function deleteBrand(int $brandId): Response
	{
		return $this->connector->send(new DeleteBrand($brandId));
	}
}
