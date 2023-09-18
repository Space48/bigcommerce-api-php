<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProductMetafields
 *
 * Returns a list of *Product Metafields*. Optional parameters can be passed in.
 */
class GetProductMetafields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/metafields";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param null|string $key Filter based on a metafield's key.
	 * @param null|string $namespace Filter based on a metafield's namespace.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected ?string $key = null,
		protected ?string $namespace = null,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'key' => $this->key,
			'namespace' => $this->namespace,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
		]);
	}
}
