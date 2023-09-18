<?php

namespace Space48\Bigcommerce\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProducts
 *
 * To delete *Product* objects, you must include a filter. This prevents inadvertently deleting all
 * *Product* objects in a store.
 *
 * > #### Note
 * > The maximum number of products you can delete at one
 * time is 250.
 *
 * **Example**:
 * To delete products with the id's of 1,2 and 3, use `DELETE
 * /v3/catalog/products?id:in=1,2,3`.
 */
class DeleteProducts extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products";
	}


	/**
	 * @param null|string $name Filter items by name.
	 * @param null|string $sku Filter items by SKU.
	 * @param null|float|int $price Filter items by price.
	 * @param null|float|int $weight Filter items by weight.
	 * @param null|string $condition Filter items by condition.
	 * @param null|int $brandId Filter items by brand_id.
	 * @param null|string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_modified:min=2018-06-15`
	 * @param null|string $dateLastImported Filter items by date_last_imported. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
	 * @param null|bool $isVisible Filter items by if visible on the storefront.
	 * @param null|int $isFeatured Filter items by is_featured.
	 * @param null|array $idIn Filter by product ID(s).
	 * @param null|int $inventoryLevel Filter items by inventory_level.
	 * @param null|int $totalSold Filter items by total_sold.
	 * @param null|string $type Filter items by type: `physical` or `digital`.
	 * @param null|int $categories Filter items by categories.
	 *  If a product is in more than one category, using this query will not return the product. Instead use `categories:in=12`.
	 * @param null|string $keyword Filter items by keywords found in the `name`, `description`, or `sku` fields, or in the brand name.
	 */
	public function __construct(
		protected ?string $name = null,
		protected ?string $sku = null,
		protected float|int|null $price = null,
		protected float|int|null $weight = null,
		protected ?string $condition = null,
		protected ?int $brandId = null,
		protected ?string $dateModified = null,
		protected ?string $dateLastImported = null,
		protected ?bool $isVisible = null,
		protected ?int $isFeatured = null,
		protected ?array $idIn = null,
		protected ?int $inventoryLevel = null,
		protected ?int $totalSold = null,
		protected ?string $type = null,
		protected ?int $categories = null,
		protected ?string $keyword = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'name' => $this->name,
			'sku' => $this->sku,
			'price' => $this->price,
			'weight' => $this->weight,
			'condition' => $this->condition,
			'brand_id' => $this->brandId,
			'date_modified' => $this->dateModified,
			'date_last_imported' => $this->dateLastImported,
			'is_visible' => $this->isVisible,
			'is_featured' => $this->isFeatured,
			'id:in' => $this->idIn,
			'inventory_level' => $this->inventoryLevel,
			'total_sold' => $this->totalSold,
			'type' => $this->type,
			'categories' => $this->categories,
			'keyword' => $this->keyword,
		]);
	}
}
