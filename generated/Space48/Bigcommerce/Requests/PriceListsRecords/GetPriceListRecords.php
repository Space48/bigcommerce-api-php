<?php

namespace Space48\Bigcommerce\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPriceListRecords
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
class GetPriceListRecords extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/records";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param null|int $variantIdIn The ID of the `Variant` for which prices were requested.
	 * @param null|string $productIdIn A comma-separated list of IDs of `Product`s for which prices were requested.
	 * @param null|string $currency Filter items by currency.
	 * @param null|string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include `bulk_pricing_tiers` and `sku`. Other values will be ignored.
	 * @param null|float|int $price Filter items by price.
	 * @param null|float|int $salePrice Filter items by sale_price.
	 * @param null|float|int $retailPrice Filter items by retail_price.
	 * @param null|float|int $mapPrice Filter items by map_price.
	 * @param null|float|int $calculatedPrice Filter items by calculated_price.
	 * @param null|string $dateCreated Filter items by date_created.
	 * @param null|string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2022-06-15`
	 * @param null|string $sku Filter items by SKU.
	 * @param null|array $skuIn
	 * @param null|array $currencyIn
	 * @param null|float|int $priceMax
	 * @param null|float|int $priceMin
	 * @param null|float|int $salePriceMax
	 * @param null|float|int $salePriceMin
	 * @param null|float|int $retailPriceMax
	 * @param null|float|int $retailPriceMin
	 * @param null|float|int $mapPriceMax
	 * @param null|float|int $mapPriceMin
	 * @param null|float|int $calculatedPriceMax
	 * @param null|float|int $calculatedPriceMin
	 * @param null|string $dateCreatedMax
	 * @param null|string $dateCreatedMin
	 * @param null|string $dateModifiedMax
	 * @param null|string $dateModifiedMin
	 */
	public function __construct(
		protected int $priceListId,
		protected ?int $variantIdIn = null,
		protected ?string $productIdIn = null,
		protected ?string $currency = null,
		protected ?string $include = null,
		protected float|int|null $price = null,
		protected float|int|null $salePrice = null,
		protected float|int|null $retailPrice = null,
		protected float|int|null $mapPrice = null,
		protected float|int|null $calculatedPrice = null,
		protected ?string $dateCreated = null,
		protected ?string $dateModified = null,
		protected ?string $sku = null,
		protected ?array $skuIn = null,
		protected ?array $currencyIn = null,
		protected float|int|null $priceMax = null,
		protected float|int|null $priceMin = null,
		protected float|int|null $salePriceMax = null,
		protected float|int|null $salePriceMin = null,
		protected float|int|null $retailPriceMax = null,
		protected float|int|null $retailPriceMin = null,
		protected float|int|null $mapPriceMax = null,
		protected float|int|null $mapPriceMin = null,
		protected float|int|null $calculatedPriceMax = null,
		protected float|int|null $calculatedPriceMin = null,
		protected ?string $dateCreatedMax = null,
		protected ?string $dateCreatedMin = null,
		protected ?string $dateModifiedMax = null,
		protected ?string $dateModifiedMin = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
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
		]);
	}
}
