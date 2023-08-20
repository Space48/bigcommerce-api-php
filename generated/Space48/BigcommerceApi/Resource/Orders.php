<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Orders\CreateAnOrder;
use Space48\BigcommerceApi\Requests\Orders\DeleteAllOrders;
use Space48\BigcommerceApi\Requests\Orders\DeleteAnOrder;
use Space48\BigcommerceApi\Requests\Orders\GetAllOrders;
use Space48\BigcommerceApi\Requests\Orders\GetAnOrder;
use Space48\BigcommerceApi\Requests\Orders\GetCountOrder;
use Space48\BigcommerceApi\Requests\Orders\UpdateAnOrder;
use Space48\BigcommerceApi\Resource;

class Orders extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 * @param string $include * `consignments` - include the response returned from the request to the `/orders/{order_id}/consignments` endpoint.
	 *
	 * * `consignments.line_items` - include the response returned from the request to the `/orders/{order_id}/products` endpoint in consignments. This implies `include=consignments`.
	 */
	public function getAnOrder(int $orderId, string $include): Response
	{
		return $this->connector->send(new GetAnOrder($orderId, $include));
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function updateAnOrder(int $orderId): Response
	{
		return $this->connector->send(new UpdateAnOrder($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function deleteAnOrder(int $orderId): Response
	{
		return $this->connector->send(new DeleteAnOrder($orderId));
	}


	public function getCountOrder(): Response
	{
		return $this->connector->send(new GetCountOrder());
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
	public function getAllOrders(
		int $minId,
		int $maxId,
		float|int $minTotal,
		float|int $maxTotal,
		int $customerId,
		string $email,
		int $statusId,
		string $cartId,
		string $paymentMethod,
		string $minDateCreated,
		string $maxDateCreated,
		string $minDateModified,
		string $maxDateModified,
		string $sort,
		bool $isDeleted,
		int $channelId,
		string $include,
	): Response
	{
		return $this->connector->send(new GetAllOrders($minId, $maxId, $minTotal, $maxTotal, $customerId, $email, $statusId, $cartId, $paymentMethod, $minDateCreated, $maxDateCreated, $minDateModified, $maxDateModified, $sort, $isDeleted, $channelId, $include));
	}


	/**
	 * @param string $include * `consignments` - include the response returned from the request to the `/orders/{order_id}/consignments` endpoint.
	 *
	 * * `consignments.line_items` - include the response returned from the request to the `/orders/{order_id}/products` endpoint in consignments. This implies `include=consignments`.
	 */
	public function createAnOrder(string $include): Response
	{
		return $this->connector->send(new CreateAnOrder($include));
	}


	public function deleteAllOrders(): Response
	{
		return $this->connector->send(new DeleteAllOrders());
	}
}
