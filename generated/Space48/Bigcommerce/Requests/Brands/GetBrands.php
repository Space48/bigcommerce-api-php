<?php

namespace Space48\Bigcommerce\Requests\Brands;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBrands
 *
 * Returns a list of *Brands*. Optional filter parameters can be passed in.
 */
class GetBrands extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands";
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
	 * @param null|string $nameLike Filter items by part of a name. For example, `name:like=new` returns brands with names that include `new`.
	 * @param null|string $pageTitle Filter items by page_title.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param null|string $sort Field name to sort by.
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
		protected ?string $nameLike = null,
		protected ?string $pageTitle = null,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
		protected ?string $sort = null,
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
			'name:like' => $this->nameLike,
			'page_title' => $this->pageTitle,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
			'sort' => $this->sort,
		]);
	}
}
