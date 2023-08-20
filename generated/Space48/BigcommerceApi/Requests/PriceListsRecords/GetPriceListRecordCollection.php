<?php

namespace Space48\BigcommerceApi\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPriceListRecordCollection
 *
 * Returns a list of *Price List Records* associated with a *Price List*.
 *
 * **Notes**
 * * Supports up to
 * 10 simultaneous GET requests. Running more than the allowed number of requests concurrently on the
 * same store will result in a `429` status error and your additional requests will fail.
 * * Store
 * Pricelist Records data to reduce the number of calls and maximize performance.
 */
class GetPriceListRecordCollection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/records";
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
	public function __construct(
		protected int $priceListId,
		protected int $variantIdIn,
		protected string $productIdIn,
		protected string $currency,
		protected string $include,
		protected float|int $price,
		protected float|int $salePrice,
		protected float|int $retailPrice,
		protected float|int $mapPrice,
		protected float|int $calculatedPrice,
		protected string $dateCreated,
		protected string $dateModified,
		protected string $sku,
		protected array $skuIn,
		protected array $currencyIn,
		protected float|int $priceMax,
		protected float|int $priceMin,
		protected float|int $salePriceMax,
		protected float|int $salePriceMin,
		protected float|int $retailPriceMax,
		protected float|int $retailPriceMin,
		protected float|int $mapPriceMax,
		protected float|int $mapPriceMin,
		protected float|int $calculatedPriceMax,
		protected float|int $calculatedPriceMin,
		protected string $dateCreatedMax,
		protected string $dateCreatedMin,
		protected string $dateModifiedMax,
		protected string $dateModifiedMin,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'variant_id:in' => $this->variantIdIn,
			'product_id:in' => $this->productIdIn,
			'currency' => $this->currency,
			'include' => $this->include,
			'price' => $this->price,
			'sale_price' => $this->salePrice,
			'retail_price' => $this->retailPrice,
			'map_price' => $this->mapPrice,
			'calculated_price' => $this->calculatedPrice,
			'date_created' => $this->dateCreated,
			'date_modified' => $this->dateModified,
			'sku' => $this->sku,
			'sku:in' => $this->skuIn,
			'currency:in' => $this->currencyIn,
			'price:max' => $this->priceMax,
			'price:min' => $this->priceMin,
			'sale_price:max' => $this->salePriceMax,
			'sale_price:min' => $this->salePriceMin,
			'retail_price:max' => $this->retailPriceMax,
			'retail_price:min' => $this->retailPriceMin,
			'map_price:max' => $this->mapPriceMax,
			'map_price:min' => $this->mapPriceMin,
			'calculated_price:max' => $this->calculatedPriceMax,
			'calculated_price:min' => $this->calculatedPriceMin,
			'date_created:max' => $this->dateCreatedMax,
			'date_created:min' => $this->dateCreatedMin,
			'date_modified:max' => $this->dateModifiedMax,
			'date_modified:min' => $this->dateModifiedMin,
		];
	}
}
