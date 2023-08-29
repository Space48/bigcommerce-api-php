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
	 * @param int $id Filter items by ID.
	 * @param array $idIn
	 * @param array $idNotIn
	 * @param array $idMin
	 * @param array $idMax
	 * @param array $idGreater
	 * @param array $idLess
	 * @param string $name Filter items by name.
	 * @param string $nameLike Filter items by part of a name. For example, `name:like=new` returns brands with names that include `new`.
	 * @param string $pageTitle Filter items by page_title.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param string $sort Field name to sort by.
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
		protected string $nameLike,
		protected string $pageTitle,
		protected string $includeFields,
		protected string $excludeFields,
		protected string $sort,
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
			'name:like' => $this->nameLike,
			'page_title' => $this->pageTitle,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
			'sort' => $this->sort,
		];
	}
}
