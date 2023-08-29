<?php

namespace Space48\Bigcommerce\Requests\Orders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllOrders
 *
 * Gets a list of orders using the filter query.
 *
 * **Notes**
 *
 * * The default sort is by order id, from
 * lowest to highest.
 * * By default, requests sent without parameters will only return 50 orders.
 */
class GetAllOrders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders";
	}


	/**
	 * @param int $minId The minimum order ID.
	 * @param int $maxId The maximum order ID.
	 * @param float|int $minTotal The minimum order total in floating point format. eg. 12.50
	 * @param float|int $maxTotal The maximum order total in floating point format. eg. 12.50
	 * @param int $customerId Customer ID.
	 * @param string $email The email of the customer.
	 * @param int $statusId The status ID of the order. You can get the status id from the `/orders` endpoints.
	 * @param string $cartId The cart ID of the order.
	 * @param string $paymentMethod The display name of the payment method used on the order.
	 * @param string $minDateCreated Minimum date the order was created in RFC-2822 or ISO-8601.
	 *
	 * RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`
	 *
	 * ISO-8601: `2017-04-20T11:32:00.000-04:00`
	 * @param string $maxDateCreated Maximum date the order was created in RFC-2822 or ISO-8601.
	 *
	 * RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`
	 *
	 * ISO-8601: `2017-04-20T11:32:00.000-04:00`
	 * @param string $minDateModified Minimum date the order was modified in RFC-2822 or ISO-8601.
	 *
	 * RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`
	 *
	 * ISO-8601: `2017-04-20T11:32:00.000-04:00`
	 * @param string $maxDateModified Maximum date the order was modified in RFC-2822 or ISO-8601.
	 *
	 * RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`
	 *
	 * ISO-8601: `2017-04-20T11:32:00.000-04:00`
	 * @param string $sort Field and direction to sort orders. To specify the direction, add `:asc` or `:desc` to the end of the query parameter. e.g., `sort=date_created:desc`.
	 * @param bool $isDeleted If the order was deleted or archived.
	 * @param int $channelId The Channel ID of the Order.
	 * @param string $include * `consignments` - include the response returned from the request to the `/orders/{order_id}/consignments` endpoint.
	 *
	 * * `consignments.line_items` - include the response returned from the request to the `/orders/{order_id}/products` endpoint in consignments. This implies `include=consignments`.
	 */
	public function __construct(
		protected int $minId,
		protected int $maxId,
		protected float|int $minTotal,
		protected float|int $maxTotal,
		protected int $customerId,
		protected string $email,
		protected int $statusId,
		protected string $cartId,
		protected string $paymentMethod,
		protected string $minDateCreated,
		protected string $maxDateCreated,
		protected string $minDateModified,
		protected string $maxDateModified,
		protected string $sort,
		protected bool $isDeleted,
		protected int $channelId,
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'min_id' => $this->minId,
			'max_id' => $this->maxId,
			'min_total' => $this->minTotal,
			'max_total' => $this->maxTotal,
			'customer_id' => $this->customerId,
			'email' => $this->email,
			'status_id' => $this->statusId,
			'cart_id' => $this->cartId,
			'payment_method' => $this->paymentMethod,
			'min_date_created' => $this->minDateCreated,
			'max_date_created' => $this->maxDateCreated,
			'min_date_modified' => $this->minDateModified,
			'max_date_modified' => $this->maxDateModified,
			'sort' => $this->sort,
			'is_deleted' => $this->isDeleted,
			'channel_id' => $this->channelId,
			'include' => $this->include,
		];
	}
}
