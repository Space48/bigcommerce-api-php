<?php

namespace Space48\Bigcommerce\Requests\OrderTaxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderTaxes
 *
 * Gets all order taxes using `order_id`.
 * Each tax applied to an order. This information can be useful
 * for reporting purposes.
 * Pass in the query parameter `?details=true` to return extra details about
 * order taxes.
 * `order_product_id` and `line_item_type` are also returned.
 *
 * All values are read-only.
 */
class GetOrderTaxes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/taxes";
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param null|string $details To return detailed tax information, pass in the details query.
	 */
	public function __construct(
		protected int $orderId,
		protected ?string $details = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['details' => $this->details]);
	}
}
