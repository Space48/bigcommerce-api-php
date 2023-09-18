<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PaymentActions\CaptureOrderPayment;
use Space48\Bigcommerce\Requests\PaymentActions\CreateOrderRefund;
use Space48\Bigcommerce\Requests\PaymentActions\CreateOrderRefundQuotes;
use Space48\Bigcommerce\Requests\PaymentActions\CreateOrdersRefundQuotes;
use Space48\Bigcommerce\Requests\PaymentActions\GetOrderRefund;
use Space48\Bigcommerce\Requests\PaymentActions\GetOrderRefunds;
use Space48\Bigcommerce\Requests\PaymentActions\GetOrdersRefunds;
use Space48\Bigcommerce\Requests\PaymentActions\VoidOrderPayment;
use Space48\Bigcommerce\Resource;

class PaymentActions extends Resource
{
	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function captureOrderPayment(int $orderId): Response
	{
		return $this->connector->send(new CaptureOrderPayment($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function voidOrderPayment(int $orderId): Response
	{
		return $this->connector->send(new VoidOrderPayment($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function createOrderRefundQuotes(int $orderId): Response
	{
		return $this->connector->send(new CreateOrderRefundQuotes($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function getOrderRefunds(int $orderId): Response
	{
		return $this->connector->send(new GetOrderRefunds($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function createOrderRefund(int $orderId): Response
	{
		return $this->connector->send(new CreateOrderRefund($orderId));
	}


	/**
	 * @param int $refundId Refund ID.
	 */
	public function getOrderRefund(int $refundId): Response
	{
		return $this->connector->send(new GetOrderRefund($refundId));
	}


	/**
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
	 * Must be in url-encoded RFC 3339 format.
	 * e.g. `2020-01-15T01:02:34-01:00` is RFC 3339 format.
	 * Url-encoded this will be `2020-01-15T01%3A02%3A34%2B01%3A00`
	 */
	public function getOrdersRefunds(?array $orderIdIn, ?array $idIn, ?string $createdMin, ?string $createdMax): Response
	{
		return $this->connector->send(new GetOrdersRefunds($orderIdIn, $idIn, $createdMin, $createdMax));
	}


	public function createOrdersRefundQuotes(): Response
	{
		return $this->connector->send(new CreateOrdersRefundQuotes());
	}
}
