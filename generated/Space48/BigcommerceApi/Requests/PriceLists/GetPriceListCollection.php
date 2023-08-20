<?php

namespace Space48\BigcommerceApi\Requests\PriceLists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPriceListCollection
 *
 * Returns a list of *Price Lists*. Optional parameters can be passed in.
 */
class GetPriceListCollection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pricelists";
	}


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
	public function __construct(
		protected int $id,
		protected string $name,
		protected string $dateCreated,
		protected string $dateModified,
		protected array $idIn,
		protected array $nameLike,
		protected string $dateCreatedMax,
		protected string $dateCreatedMin,
		protected string $dateModifiedMax,
		protected string $dateModifiedMin,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'id' => $this->id,
			'name' => $this->name,
			'date_created' => $this->dateCreated,
			'date_modified' => $this->dateModified,
			'id:in' => $this->idIn,
			'name:like' => $this->nameLike,
			'date_created:max' => $this->dateCreatedMax,
			'date_created:min' => $this->dateCreatedMin,
			'date_modified:max' => $this->dateModifiedMax,
			'date_modified:min' => $this->dateModifiedMin,
		];
	}
}
