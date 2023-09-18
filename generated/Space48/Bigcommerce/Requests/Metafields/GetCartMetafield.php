<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCartMetafield
 *
 * Gets a cart metafield.
 */
class GetCartMetafield extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 * @param int $metafieldId The unique ID of the subject `Metafield`.
	 * @param null|string $key Filter based on a metafieldʼs key.
	 * @param null|string $namespace Filter based on a metafieldʼs key.
	 * @param null|string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 */
	public function __construct(
		protected string $cartId,
		protected int $metafieldId,
		protected ?string $key = null,
		protected ?string $namespace = null,
		protected ?string $direction = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key, 'namespace' => $this->namespace, 'direction' => $this->direction]);
	}
}
