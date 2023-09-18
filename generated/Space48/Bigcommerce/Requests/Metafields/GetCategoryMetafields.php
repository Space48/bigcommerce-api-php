<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCategoryMetafields
 *
 * Returns a list of *Metafields* on a *Category*. Optional filter parameters can be passed in.
 */
class GetCategoryMetafields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/metafields";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 * @param null|int $id Filter items by id.
	 * @param null|array $idIn
	 * @param null|array $idNotIn
	 * @param null|array $idMin
	 * @param null|array $idMax
	 * @param null|array $idGreater
	 * @param null|array $idLess
	 * @param null|string $key Filter based on a metafield's key.
	 * @param null|string $namespace Filter based on a metafield's namespace.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $categoryId,
		protected ?int $id = null,
		protected ?array $idIn = null,
		protected ?array $idNotIn = null,
		protected ?array $idMin = null,
		protected ?array $idMax = null,
		protected ?array $idGreater = null,
		protected ?array $idLess = null,
		protected ?string $key = null,
		protected ?string $namespace = null,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
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
			'key' => $this->key,
			'namespace' => $this->namespace,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
		]);
	}
}
