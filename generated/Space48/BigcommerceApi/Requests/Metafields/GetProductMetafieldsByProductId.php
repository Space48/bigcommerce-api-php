<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getProductMetafieldsByProductId
 *
 * Returns a list of *Product Metafields*. Optional parameters can be passed in.
 */
class GetProductMetafieldsByProductId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/metafields";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $key Filter based on a metafield's key.
	 * @param string $namespace Filter based on a metafield's namespace.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $productId,
		protected string $key,
		protected string $namespace,
		protected string $includeFields,
		protected string $excludeFields,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'key' => $this->key,
			'namespace' => $this->namespace,
			'include_fields' => $this->includeFields,
			'exclude_fields' => $this->excludeFields,
		];
	}
}
