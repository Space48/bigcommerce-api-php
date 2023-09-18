<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Orders\CreateOrder;
use Space48\Bigcommerce\Requests\Orders\DeleteOrder;
use Space48\Bigcommerce\Requests\Orders\DeleteOrders;
use Space48\Bigcommerce\Requests\Orders\GetOrder;
use Space48\Bigcommerce\Requests\Orders\GetOrders;
use Space48\Bigcommerce\Requests\Orders\GetOrdersCount;
use Space48\Bigcommerce\Requests\Orders\UpdateOrder;
use Space48\Bigcommerce\Resource;

class Orders extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 * @param string $include * `consignments` - include the response returned from the request to the `/orders/{order_id}/consignments` endpoint.
	 *
	 * * `consignments.line_items` - include the response returned from the request to the `/orders/{order_id}/products` endpoint in consignments. This implies `include=consignments`.
	 */
	public function getOrder(int $orderId, ?string $include): Response
	{
		return $this->connector->send(new GetOrder($orderId, $include));
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function updateOrder(int $orderId): Response
	{
		return $this->connector->send(new UpdateOrder($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function deleteOrder(int $orderId): Response
	{
		return $this->connector->send(new DeleteOrder($orderId));
	}


	public function getOrdersCount(): Response
	{
		return $this->connector->send(new GetOrdersCount());
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
	public function getOrders(
		?int $minId,
		?int $maxId,
		float|int|null $minTotal,
		float|int|null $maxTotal,
		?int $customerId,
		?string $email,
		?int $statusId,
		?string $cartId,
		?string $paymentMethod,
		?string $minDateCreated,
		?string $maxDateCreated,
		?string $minDateModified,
		?string $maxDateModified,
		?string $sort,
		?bool $isDeleted,
		?int $channelId,
		?string $include,
	): Response
	{
		return $this->connector->send(new GetOrders($minId, $maxId, $minTotal, $maxTotal, $customerId, $email, $statusId, $cartId, $paymentMethod, $minDateCreated, $maxDateCreated, $minDateModified, $maxDateModified, $sort, $isDeleted, $channelId, $include));
	}


	/**
	 * @param string $include * `consignments` - include the response returned from the request to the `/orders/{order_id}/consignments` endpoint.
	 *
	 * * `consignments.line_items` - include the response returned from the request to the `/orders/{order_id}/products` endpoint in consignments. This implies `include=consignments`.
	 */
	public function createOrder(?string $include): Response
	{
		return $this->connector->send(new CreateOrder($include));
	}


	public function deleteOrders(): Response
	{
		return $this->connector->send(new DeleteOrders());
	}
}
