<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderMetafieldsByOrderId
 *
 * Gets a `Metafield` object list, by `order_id`.
 *
 * The maximum number of metafields allowed on each
 * order, product, category, variant, or brand is 250 per client ID.
 */
class GetOrderMetafieldsByOrderId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/metafields";
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 * @param string $key Filter based on a metafield's key.
	 * @param string $namespace Filter based on a metafield's key.
	 * @param string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 */
	public function __construct(
		protected int $orderId,
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
