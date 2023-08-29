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
	 * @param int $id Filter items by ID.
	 * @param array $idIn
	 * @param array $idNotIn
	 * @param array $idMin
	 * @param array $idMax
	 * @param array $idGreater
	 * @param array $idLess
	 * @param string $name Filter items by name.
	 * @param string $upc Filter items by UPC.
	 * @param float|int $price Filter items by price.
	 * @param float|int $weight Filter items by weight.
	 * @param string $condition Filter items by condition.
	 * @param int $brandId Filter items by brand_id.
	 * @param string $dateModified Filter items by `date_modified`.
	 * @param string $dateModifiedMax Filter items by `date_modified`. For example, `date_modified:max=2020-06-15`.
	 * @param string $dateModifiedMin Filter items by `date_modified`. For example, `date_modified:min=2018-06-15`.
	 * @param string $dateLastImported Filter items by date_last_imported.
	 * @param string $dateLastImportedMax Filter items by date_last_imported. For example, `date_last_imported:max=2020-06-15`.
	 * @param string $dateLastImportedMin Filter items by date_last_imported. For example, `date_last_imported:min=2018-06-15`.
	 * @param bool $isVisible Filter items based on whether the product is currently visible on the storefront.
	 * @param int $isFeatured Filter items by is_featured. `1` for true, `0` for false.
	 * @param int $isFreeShipping Filter items by is_free_shipping. `1` for true, `0` for false.
	 * @param int $inventoryLevel Filter items by inventory_level.
	 * @param int $inventoryLevelIn
	 * @param int $inventoryLevelNotIn
	 * @param int $inventoryLevelMin
	 * @param int $inventoryLevelMax
	 * @param int $inventoryLevelGreater
	 * @param int $inventoryLevelLess
	 * @param int $inventoryLow Filter items by inventory_low. Values: 1, 0.
	 * @param int $outOfStock Filter items by out_of_stock. To enable the filter, pass `out_of_stock`=`1`.
	 * @param int $totalSold Filter items by total_sold.
	 * @param string $type Filter items by type.
	 * @param int $categories Filter items by categories.
	 *  If a product is in more than one category, using this query will not return the product. Instead use `categories:in=12`.
	 * @param string $keyword Filter items by keywords found in the `name` or `sku` fields
	 * @param string $keywordContext Set context used by the search algorithm to return results targeted towards the specified group. Use `merchant` to help merchants search their own catalog. Use `shopper` to return shopper-facing search results.
	 * @param int $status Filter items by status.
	 * @param string $include Sub-resources to include on a product, in a comma-separated list. If `options` or `modifiers` is used, results are limited to 10 per page.
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
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param string $availability Filter items by availability. Values are: available, disabled, preorder.
	 * @param string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 * @param string $sort Field name to sort by. Note: Since `id` increments when new products are added, you can use that field to sort by product create date.
	 * @param int $categoriesIn Filter items by categories. Use for products in multiple categories. For example, `categories:in=12`.
	 * @param string $sku Filter items by main SKU. To filter by variant SKU, see [Get All Variants](/docs/rest-catalog/product-variants#get-all-product-variants).
	 * @param array $skuIn Filter items by SKU.
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
		protected string $upc,
		protected float|int $price,
		protected float|int $weight,
		protected string $condition,
		protected int $brandId,
		protected string $dateModified,
		protected string $dateModifiedMax,
		protected string $dateModifiedMin,
		protected string $dateLastImported,
		protected string $dateLastImportedMax,
		protected string $dateLastImportedMin,
		protected bool $isVisible,
		protected int $isFeatured,
		protected int $isFreeShipping,
		protected int $inventoryLevel,
		protected int $inventoryLevelIn,
		protected int $inventoryLevelNotIn,
		protected int $inventoryLevelMin,
		protected int $inventoryLevelMax,
		protected int $inventoryLevelGreater,
		protected int $inventoryLevelLess,
		protected int $inventoryLow,
		protected int $outOfStock,
		protected int $totalSold,
		protected string $type,
		protected int $categories,
		protected string $keyword,
		protected string $keywordContext,
		protected int $status,
		protected string $include,
		protected string $includeFields,
		protected string $excludeFields,
		protected string $availability,
		protected string $direction,
		protected string $sort,
		protected int $categoriesIn,
		protected string $sku,
		protected array $skuIn,
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
		];
	}
}
