<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllCartMetafields
 *
 * Get all cart metafields.
 */
class GetAllCartMetafields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/metafields";
	}


	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 * @param string $key Filter based on a metafieldʼs key.
	 * @param string $namespace Filter based on a metafieldʼs key.
	 * @param string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 */
	public function __construct(
		protected string $cartId,
		protected string $key,
		protected string $namespace,
		protected string $direction,
	) {
	}


	public function defaultQuery(): array
	{
		return ['key' => $this->key, 'namespace' => $this->namespace, 'direction' => $this->direction];
	}
}
