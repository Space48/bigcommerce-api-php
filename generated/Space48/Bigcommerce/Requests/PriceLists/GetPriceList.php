<?php

namespace Space48\Bigcommerce\Requests\PriceLists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPriceList
 *
 * Returns a single *Price List*.
 */
class GetPriceList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param null|int $id Filter items by ID.
	 * @param null|string $name Filter items by name.
	 * @param null|string $dateCreated Filter items by date_created.
	 * @param null|string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2022-06-15`
	 */
	public function __construct(
		protected int $priceListId,
		protected ?int $id = null,
		protected ?string $name = null,
		protected ?string $dateCreated = null,
		protected ?string $dateModified = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'name' => $this->name,
			'date_created' => $this->dateCreated,
			'date_modified' => $this->dateModified,
		]);
	}
}
