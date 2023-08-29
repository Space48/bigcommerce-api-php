<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBrandMetafieldsByBrandId
 *
 * Returns a list of *Brand Metafields*. Optional filter parameters can be passed in.
 */
class GetBrandMetafieldsByBrandId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands/{$this->brandId}/metafields";
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 * @param int $id Filter items by ID.
	 * @param array $idIn
	 * @param array $idNotIn
	 * @param array $idMin
	 * @param array $idMax
	 * @param array $idGreater
	 * @param array $idLess
	 * @param string $key Filter based on a metafield's key.
	 * @param string $namespace Filter based on a metafield's namespace.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $brandId,
		protected int $id,
		protected array $idIn,
		protected array $idNotIn,
		protected array $idMin,
		protected array $idMax,
		protected array $idGreater,
		protected array $idLess,
		protected string $key,
		protected string $namespace,
		protected string $includeFields,
		protected string $excludeFields,
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
			'key' => $this->key,
			'namespace' => $this->namespace,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
		];
	}
}
