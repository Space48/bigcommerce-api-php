<?php

namespace Space48\Bigcommerce\Requests\PriceLists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPriceLists
 *
 * Returns a list of *Price Lists*. Optional parameters can be passed in.
 */
class GetPriceLists extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pricelists";
	}


	/**
	 * @param null|int $id Filter items by ID.
	 * @param null|string $name Filter items by name.
	 * @param null|string $dateCreated Filter items by date_created.
	 * @param null|string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
	 * @param null|array $idIn
	 * @param null|array $nameLike
	 * @param null|string $dateCreatedMax
	 * @param null|string $dateCreatedMin
	 * @param null|string $dateModifiedMax
	 * @param null|string $dateModifiedMin
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?string $name = null,
		protected ?string $dateCreated = null,
		protected ?string $dateModified = null,
		protected ?array $idIn = null,
		protected ?array $nameLike = null,
		protected ?string $dateCreatedMax = null,
		protected ?string $dateCreatedMin = null,
		protected ?string $dateModifiedMax = null,
		protected ?string $dateModifiedMin = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
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
		]);
	}
}
