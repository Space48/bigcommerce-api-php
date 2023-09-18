<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PriceLists\CreatePriceList;
use Space48\Bigcommerce\Requests\PriceLists\DeletePriceList;
use Space48\Bigcommerce\Requests\PriceLists\DeletePriceLists;
use Space48\Bigcommerce\Requests\PriceLists\GetPriceList;
use Space48\Bigcommerce\Requests\PriceLists\GetPriceLists;
use Space48\Bigcommerce\Requests\PriceLists\UpdatePriceList;
use Space48\Bigcommerce\Resource;

class PriceLists extends Resource
{
	/**
	 * @param int $id Filter items by ID.
	 * @param string $name Filter items by name.
	 * @param string $dateCreated Filter items by date_created.
	 * @param string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
	 * @param array $idIn
	 * @param array $nameLike
	 * @param string $dateCreatedMax
	 * @param string $dateCreatedMin
	 * @param string $dateModifiedMax
	 * @param string $dateModifiedMin
	 */
	public function getPriceLists(
		?int $id,
		?string $name,
		?string $dateCreated,
		?string $dateModified,
		?array $idIn,
		?array $nameLike,
		?string $dateCreatedMax,
		?string $dateCreatedMin,
		?string $dateModifiedMax,
		?string $dateModifiedMin,
	): Response
	{
		return $this->connector->send(new GetPriceLists($id, $name, $dateCreated, $dateModified, $idIn, $nameLike, $dateCreatedMax, $dateCreatedMin, $dateModifiedMax, $dateModifiedMin));
	}


	public function createPriceList(): Response
	{
		return $this->connector->send(new CreatePriceList());
	}


	/**
	 * @param int $id Filter items by ID.
	 * @param string $name Filter items by name.
	 */
	public function deletePriceLists(?int $id, ?string $name): Response
	{
		return $this->connector->send(new DeletePriceLists($id, $name));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $id Filter items by ID.
	 * @param string $name Filter items by name.
	 * @param string $dateCreated Filter items by date_created.
	 * @param string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2022-06-15`
	 */
	public function getPriceList(
		int $priceListId,
		?int $id,
		?string $name,
		?string $dateCreated,
		?string $dateModified,
	): Response
	{
		return $this->connector->send(new GetPriceList($priceListId, $id, $name, $dateCreated, $dateModified));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 */
	public function updatePriceList(int $priceListId): Response
	{
		return $this->connector->send(new UpdatePriceList($priceListId));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 */
	public function deletePriceList(int $priceListId): Response
	{
		return $this->connector->send(new DeletePriceList($priceListId));
	}
}
