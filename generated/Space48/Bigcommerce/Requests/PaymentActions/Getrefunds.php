<?php

namespace Space48\Bigcommerce\Requests\PaymentActions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getrefunds
 *
 * Returns a list of refunds ordered by refund ID in ascending order.
 *
 * Requires at least one of the
 * following scopes:
 * * `store_v2_transactions_read_only`
 * * `store_v2_transactions`
 * *
 * `store_v2_orders_read_only`
 * * `store_v2_orders`
 */
class Getrefunds extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/stores/{$this->storeHash}/v3/orders/payment_actions/refunds";
	}


	/**
	 * @param string $storeHash
	 * @param array $orderIdIn Filter by `order_id`. Accepts multiple as comma-separated values.
	 * @param array $idIn Filter by refund `id`. Accepts multiple as comma-separated values.
	 * @param string $createdMin Filter results so they are later than or equal to provided date.
	 *
	 *
	 * Must be in url-encoded RFC 3339 format.
	 * e.g. `2020-01-15T01:02:34-01:00` is RFC 3339 format.
	 * Url-encoded this will be `2020-01-15T01%3A02%3A34%2B01%3A00`
	 * @param string $createdMax Filter results so they are earlier than or equal to provided date.
	 *
	 *
	 * Must be in url-encoded RFC 3339 format.
	 * e.g. `2020-01-15T01:02:34-01:00` is RFC 3339 format.
	 * Url-encoded this will be `2020-01-15T01%3A02%3A34%2B01%3A00`
	 */
	public function __construct(
		protected string $storeHash,
		protected array $orderIdIn,
		protected array $idIn,
		protected string $createdMin,
		protected string $createdMax,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'order_id:in' => $this->orderIdIn,
			'id:in' => $this->idIn,
			'created:min' => $this->createdMin,
			'created:max' => $this->createdMax,
		];
	}
}
