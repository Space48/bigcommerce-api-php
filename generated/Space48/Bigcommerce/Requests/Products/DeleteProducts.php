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
	public function __construct(
		protected string $name,
		protected string $sku,
		protected float|int $price,
		protected float|int $weight,
		protected string $condition,
		protected int $brandId,
		protected string $dateModified,
		protected string $dateLastImported,
		protected bool $isVisible,
		protected int $isFeatured,
		protected array $idIn,
		protected int $inventoryLevel,
		protected int $totalSold,
		protected string $type,
		protected int $categories,
		protected string $keyword,
	) {
	}


	public function defaultQuery(): array
	{
		return [
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
		];
	}
}
