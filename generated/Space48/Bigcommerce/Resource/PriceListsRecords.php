<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PriceListsRecords\DeletePriceListRecord;
use Space48\Bigcommerce\Requests\PriceListsRecords\DeletePriceListRecordsByFilter;
use Space48\Bigcommerce\Requests\PriceListsRecords\GetPriceListRecord;
use Space48\Bigcommerce\Requests\PriceListsRecords\GetPriceListRecordCollection;
use Space48\Bigcommerce\Requests\PriceListsRecords\GetPriceListRecordsByVariantId;
use Space48\Bigcommerce\Requests\PriceListsRecords\SetPriceListRecord;
use Space48\Bigcommerce\Requests\PriceListsRecords\SetPriceListRecordCollection;
use Space48\Bigcommerce\Requests\PriceListsRecords\UpsertPriceListRecords;
use Space48\Bigcommerce\Resource;

class PriceListsRecords extends Resource
{
	public function upsertPriceListRecords(): Response
	{
		return $this->connector->send(new UpsertPriceListRecords());
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantIdIn The ID of the `Variant` for which prices were requested.
	 * @param string $productIdIn A comma-separated list of IDs of `Product`s for which prices were requested.
	 * @param string $currency Filter items by currency.
	 * @param string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include `bulk_pricing_tiers` and `sku`. Other values will be ignored.
	 * @param float|int $price Filter items by price.
	 * @param float|int $salePrice Filter items by sale_price.
	 * @param float|int $retailPrice Filter items by retail_price.
	 * @param float|int $mapPrice Filter items by map_price.
	 * @param float|int $calculatedPrice Filter items by calculated_price.
	 * @param string $dateCreated Filter items by date_created.
	 * @param string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2022-06-15`
	 * @param string $sku Filter items by SKU.
	 * @param array $skuIn
	 * @param array $currencyIn
	 * @param float|int $priceMax
	 * @param float|int $priceMin
	 * @param float|int $salePriceMax
	 * @param float|int $salePriceMin
	 * @param float|int $retailPriceMax
	 * @param float|int $retailPriceMin
	 * @param float|int $mapPriceMax
	 * @param float|int $mapPriceMin
	 * @param float|int $calculatedPriceMax
	 * @param float|int $calculatedPriceMin
	 * @param string $dateCreatedMax
	 * @param string $dateCreatedMin
	 * @param string $dateModifiedMax
	 * @param string $dateModifiedMin
	 */
	public function getPriceListRecordCollection(
		int $priceListId,
		int $variantIdIn,
		string $productIdIn,
		string $currency,
		string $include,
		float|int $price,
		float|int $salePrice,
		float|int $retailPrice,
		float|int $mapPrice,
		float|int $calculatedPrice,
		string $dateCreated,
		string $dateModified,
		string $sku,
		array $skuIn,
		array $currencyIn,
		float|int $priceMax,
		float|int $priceMin,
		float|int $salePriceMax,
		float|int $salePriceMin,
		float|int $retailPriceMax,
		float|int $retailPriceMin,
		float|int $mapPriceMax,
		float|int $mapPriceMin,
		float|int $calculatedPriceMax,
		float|int $calculatedPriceMin,
		string $dateCreatedMax,
		string $dateCreatedMin,
		string $dateModifiedMax,
		string $dateModifiedMin,
	): Response
	{
		return $this->connector->send(new GetPriceListRecordCollection($priceListId, $variantIdIn, $productIdIn, $currency, $include, $price, $salePrice, $retailPrice, $mapPrice, $calculatedPrice, $dateCreated, $dateModified, $sku, $skuIn, $currencyIn, $priceMax, $priceMin, $salePriceMax, $salePriceMin, $retailPriceMax, $retailPriceMin, $mapPriceMax, $mapPriceMin, $calculatedPriceMax, $calculatedPriceMin, $dateCreatedMax, $dateCreatedMin, $dateModifiedMax, $dateModifiedMin));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 */
	public function setPriceListRecordCollection(int $priceListId): Response
	{
		return $this->connector->send(new SetPriceListRecordCollection($priceListId));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantIdIn The ID of the `Variant` for which prices were requested.
	 */
	public function deletePriceListRecordsByFilter(int $priceListId, int $variantIdIn): Response
	{
		return $this->connector->send(new DeletePriceListRecordsByFilter($priceListId, $variantIdIn));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function getPriceListRecordsByVariantId(int $priceListId, int $variantId): Response
	{
		return $this->connector->send(new GetPriceListRecordsByVariantId($priceListId, $variantId));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param string $currencyCode The currency code associated with the price record being acted upon.
	 * @param string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include `bulk_pricing_tiers` and `sku`. Other values will be ignored.
	 * Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include `bulk_pricing_tiers` and `sku`. Other values will be ignored.
	 */
	public function getPriceListRecord(int $priceListId, int $variantId, string $currencyCode, string $include): Response
	{
		return $this->connector->send(new GetPriceListRecord($priceListId, $variantId, $currencyCode, $include));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param string $currencyCode The currency code associated with the price record being acted upon.
	 */
	public function setPriceListRecord(int $priceListId, int $variantId, string $currencyCode): Response
	{
		return $this->connector->send(new SetPriceListRecord($priceListId, $variantId, $currencyCode));
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param string $currencyCode The currency code associated with the price record being acted upon.
	 */
	public function deletePriceListRecord(int $priceListId, int $variantId, string $currencyCode): Response
	{
		return $this->connector->send(new DeletePriceListRecord($priceListId, $variantId, $currencyCode));
	}
}
