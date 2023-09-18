<?php

namespace Space48\Bigcommerce\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProducts
 *
 * Returns a list of **Products**. Optional filter parameters can be passed in.
 */
class GetProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products";
	}


	/**
	 * @param null|int $id Filter items by ID.
	 * @param null|array $idIn
	 * @param null|array $idNotIn
	 * @param null|array $idMin
	 * @param null|array $idMax
	 * @param null|array $idGreater
	 * @param null|array $idLess
	 * @param null|string $name Filter items by name.
	 * @param null|string $upc Filter items by UPC.
	 * @param null|float|int $price Filter items by price.
	 * @param null|float|int $weight Filter items by weight.
	 * @param null|string $condition Filter items by condition.
	 * @param null|int $brandId Filter items by brand_id.
	 * @param null|string $dateModified Filter items by `date_modified`.
	 * @param null|string $dateModifiedMax Filter items by `date_modified`. For example, `date_modified:max=2020-06-15`.
	 * @param null|string $dateModifiedMin Filter items by `date_modified`. For example, `date_modified:min=2018-06-15`.
	 * @param null|string $dateLastImported Filter items by date_last_imported.
	 * @param null|string $dateLastImportedMax Filter items by date_last_imported. For example, `date_last_imported:max=2020-06-15`.
	 * @param null|string $dateLastImportedMin Filter items by date_last_imported. For example, `date_last_imported:min=2018-06-15`.
	 * @param null|bool $isVisible Filter items based on whether the product is currently visible on the storefront.
	 * @param null|int $isFeatured Filter items by is_featured. `1` for true, `0` for false.
	 * @param null|int $isFreeShipping Filter items by is_free_shipping. `1` for true, `0` for false.
	 * @param null|int $inventoryLevel Filter items by inventory_level.
	 * @param null|int $inventoryLevelIn
	 * @param null|int $inventoryLevelNotIn
	 * @param null|int $inventoryLevelMin
	 * @param null|int $inventoryLevelMax
	 * @param null|int $inventoryLevelGreater
	 * @param null|int $inventoryLevelLess
	 * @param null|int $inventoryLow Filter items by inventory_low. Values: 1, 0.
	 * @param null|int $outOfStock Filter items by out_of_stock. To enable the filter, pass `out_of_stock`=`1`.
	 * @param null|int $totalSold Filter items by total_sold.
	 * @param null|string $type Filter items by type.
	 * @param null|int $categories Filter items by categories.
	 *  If a product is in more than one category, using this query will not return the product. Instead use `categories:in=12`.
	 * @param null|string $keyword Filter items by keywords found in the `name` or `sku` fields
	 * @param null|string $keywordContext Set context used by the search algorithm to return results targeted towards the specified group. Use `merchant` to help merchants search their own catalog. Use `shopper` to return shopper-facing search results.
	 * @param null|int $status Filter items by status.
	 * @param null|string $include Sub-resources to include on a product, in a comma-separated list. If `options` or `modifiers` is used, results are limited to 10 per page.
	 *
	 * **Note:** The following sub-resources include:
	 *   * variants
	 *   * images
	 *   * custom_fields
	 *   * bulk_pricing_rules
	 *   * primary_images
	 *   * modifiers
	 *   * options
	 *   * videos
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param null|string $availability Filter items by availability. Values are: available, disabled, preorder.
	 * @param null|string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 * @param null|string $sort Field name to sort by. Note: Since `id` increments when new products are added, you can use that field to sort by product create date.
	 * @param null|int $categoriesIn Filter items by categories. Use for products in multiple categories. For example, `categories:in=12`.
	 * @param null|string $sku Filter items by main SKU. To filter by variant SKU, see [Get All Variants](/docs/rest-catalog/product-variants#get-all-product-variants).
	 * @param null|array $skuIn Filter items by SKU.
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
		protected ?string $upc = null,
		protected float|int|null $price = null,
		protected float|int|null $weight = null,
		protected ?string $condition = null,
		protected ?int $brandId = null,
		protected ?string $dateModified = null,
		protected ?string $dateModifiedMax = null,
		protected ?string $dateModifiedMin = null,
		protected ?string $dateLastImported = null,
		protected ?string $dateLastImportedMax = null,
		protected ?string $dateLastImportedMin = null,
		protected ?bool $isVisible = null,
		protected ?int $isFeatured = null,
		protected ?int $isFreeShipping = null,
		protected ?int $inventoryLevel = null,
		protected ?int $inventoryLevelIn = null,
		protected ?int $inventoryLevelNotIn = null,
		protected ?int $inventoryLevelMin = null,
		protected ?int $inventoryLevelMax = null,
		protected ?int $inventoryLevelGreater = null,
		protected ?int $inventoryLevelLess = null,
		protected ?int $inventoryLow = null,
		protected ?int $outOfStock = null,
		protected ?int $totalSold = null,
		protected ?string $type = null,
		protected ?int $categories = null,
		protected ?string $keyword = null,
		protected ?string $keywordContext = null,
		protected ?int $status = null,
		protected ?string $include = null,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
		protected ?string $availability = null,
		protected ?string $direction = null,
		protected ?string $sort = null,
		protected ?int $categoriesIn = null,
		protected ?string $sku = null,
		protected ?array $skuIn = null,
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
			'upc' => $this->upc,
			'price' => $this->price,
			'weight' => $this->weight,
			'condition' => $this->condition,
			'brand_id' => $this->brandId,
			'date_modified' => $this->dateModified,
			'date_modified:max' => $this->dateModifiedMax,
			'date_modified:min' => $this->dateModifiedMin,
			'date_last_imported' => $this->dateLastImported,
			'date_last_imported:max' => $this->dateLastImportedMax,
			'date_last_imported:min' => $this->dateLastImportedMin,
			'is_visible' => $this->isVisible,
			'is_featured' => $this->isFeatured,
			'is_free_shipping' => $this->isFreeShipping,
			'inventory_level' => $this->inventoryLevel,
			'inventory_level:in' => $this->inventoryLevelIn,
			'inventory_level:not_in' => $this->inventoryLevelNotIn,
			'inventory_level:min' => $this->inventoryLevelMin,
			'inventory_level:max' => $this->inventoryLevelMax,
			'inventory_level:greater' => $this->inventoryLevelGreater,
			'inventory_level:less' => $this->inventoryLevelLess,
			'inventory_low' => $this->inventoryLow,
			'out_of_stock' => $this->outOfStock,
			'total_sold' => $this->totalSold,
			'type' => $this->type,
			'categories' => $this->categories,
			'keyword' => $this->keyword,
			'keyword_context' => $this->keywordContext,
			'status' => $this->status,
			'include' => $this->include,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
			'availability' => $this->availability,
			'direction' => $this->direction,
			'sort' => $this->sort,
			'categories:in' => $this->categoriesIn,
			'sku' => $this->sku,
			'sku:in' => $this->skuIn,
		]);
	}
}
