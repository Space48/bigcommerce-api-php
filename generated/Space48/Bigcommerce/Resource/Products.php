<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Products\CreateProduct;
use Space48\Bigcommerce\Requests\Products\DeleteProduct;
use Space48\Bigcommerce\Requests\Products\DeleteProducts;
use Space48\Bigcommerce\Requests\Products\GetProduct;
use Space48\Bigcommerce\Requests\Products\GetProducts;
use Space48\Bigcommerce\Requests\Products\UpdateProduct;
use Space48\Bigcommerce\Requests\Products\UpdateProducts;
use Space48\Bigcommerce\Resource;

class Products extends Resource
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
	public function getProducts(
		?int $id,
		?array $idIn,
		?array $idNotIn,
		?array $idMin,
		?array $idMax,
		?array $idGreater,
		?array $idLess,
		?string $name,
		?string $upc,
		float|int|null $price,
		float|int|null $weight,
		?string $condition,
		?int $brandId,
		?string $dateModified,
		?string $dateModifiedMax,
		?string $dateModifiedMin,
		?string $dateLastImported,
		?string $dateLastImportedMax,
		?string $dateLastImportedMin,
		?bool $isVisible,
		?int $isFeatured,
		?int $isFreeShipping,
		?int $inventoryLevel,
		?int $inventoryLevelIn,
		?int $inventoryLevelNotIn,
		?int $inventoryLevelMin,
		?int $inventoryLevelMax,
		?int $inventoryLevelGreater,
		?int $inventoryLevelLess,
		?int $inventoryLow,
		?int $outOfStock,
		?int $totalSold,
		?string $type,
		?int $categories,
		?string $keyword,
		?string $keywordContext,
		?int $status,
		?string $include,
		?string $includeFields,
		?string $excludeFields,
		?string $availability,
		?string $direction,
		?string $sort,
		?int $categoriesIn,
		?string $sku,
		?array $skuIn,
	): Response
	{
		return $this->connector->send(new GetProducts($id, $idIn, $idNotIn, $idMin, $idMax, $idGreater, $idLess, $name, $upc, $price, $weight, $condition, $brandId, $dateModified, $dateModifiedMax, $dateModifiedMin, $dateLastImported, $dateLastImportedMax, $dateLastImportedMin, $isVisible, $isFeatured, $isFreeShipping, $inventoryLevel, $inventoryLevelIn, $inventoryLevelNotIn, $inventoryLevelMin, $inventoryLevelMax, $inventoryLevelGreater, $inventoryLevelLess, $inventoryLow, $outOfStock, $totalSold, $type, $categories, $keyword, $keywordContext, $status, $include, $includeFields, $excludeFields, $availability, $direction, $sort, $categoriesIn, $sku, $skuIn));
	}


	/**
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 */
	public function updateProducts(?string $includeFields): Response
	{
		return $this->connector->send(new UpdateProducts($includeFields));
	}


	/**
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 */
	public function createProduct(?string $includeFields): Response
	{
		return $this->connector->send(new CreateProduct($includeFields));
	}


	/**
	 * @param string $name Filter items by name.
	 * @param string $sku Filter items by SKU.
	 * @param float|int $price Filter items by price.
	 * @param float|int $weight Filter items by weight.
	 * @param string $condition Filter items by condition.
	 * @param int $brandId Filter items by brand_id.
	 * @param string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_modified:min=2018-06-15`
	 * @param string $dateLastImported Filter items by date_last_imported. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
	 * @param bool $isVisible Filter items by if visible on the storefront.
	 * @param int $isFeatured Filter items by is_featured.
	 * @param array $idIn Filter by product ID(s).
	 * @param int $inventoryLevel Filter items by inventory_level.
	 * @param int $totalSold Filter items by total_sold.
	 * @param string $type Filter items by type: `physical` or `digital`.
	 * @param int $categories Filter items by categories.
	 *  If a product is in more than one category, using this query will not return the product. Instead use `categories:in=12`.
	 * @param string $keyword Filter items by keywords found in the `name`, `description`, or `sku` fields, or in the brand name.
	 */
	public function deleteProducts(
		?string $name,
		?string $sku,
		float|int|null $price,
		float|int|null $weight,
		?string $condition,
		?int $brandId,
		?string $dateModified,
		?string $dateLastImported,
		?bool $isVisible,
		?int $isFeatured,
		?array $idIn,
		?int $inventoryLevel,
		?int $totalSold,
		?string $type,
		?int $categories,
		?string $keyword,
	): Response
	{
		return $this->connector->send(new DeleteProducts($name, $sku, $price, $weight, $condition, $brandId, $dateModified, $dateLastImported, $isVisible, $isFeatured, $idIn, $inventoryLevel, $totalSold, $type, $categories, $keyword));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $include Sub-resources to include on a product, in a comma-separated list. If `options` or `modifiers` is used, results are limited to 10 per page.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProduct(
		int $productId,
		?string $include,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProduct($productId, $include, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Sub-resources to include on a product, in a comma-separated list. If `options` or `modifiers` is used, results are limited to 10 per page. The ID and the specified fields will be returned.
	 */
	public function updateProduct(int $productId, ?string $includeFields): Response
	{
		return $this->connector->send(new UpdateProduct($productId, $includeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function deleteProduct(int $productId): Response
	{
		return $this->connector->send(new DeleteProduct($productId));
	}
}
