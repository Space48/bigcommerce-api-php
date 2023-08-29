<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PaymentActions\Getorderrefunds;
use Space48\Bigcommerce\Requests\PaymentActions\Getrefunds;
use Space48\Bigcommerce\Requests\PaymentActions\Paymentactioncapture;
use Space48\Bigcommerce\Requests\PaymentActions\Paymentactionvoid;
use Space48\Bigcommerce\Requests\PaymentActions\Postrefund;
use Space48\Bigcommerce\Requests\PaymentActions\Postrefundquote;
use Space48\Bigcommerce\Requests\PaymentActions\Postrefundquotes;
use Space48\Bigcommerce\Requests\PaymentActions\RefundIdGet;
use Space48\Bigcommerce\Resource;

class PaymentActions extends Resource
{
	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function paymentactioncapture(int $orderId): Response
	{
		return $this->connector->send(new Paymentactioncapture($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function paymentactionvoid(int $orderId): Response
	{
		return $this->connector->send(new Paymentactionvoid($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function postrefundquote(int $orderId): Response
	{
		return $this->connector->send(new Postrefundquote($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function getorderrefunds(int $orderId): Response
	{
		return $this->connector->send(new Getorderrefunds($orderId));
	}


	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function postrefund(int $orderId): Response
	{
		return $this->connector->send(new Postrefund($orderId));
	}


	/**
	 * @param int $refundId Refund ID.
	 */
	public function refundIdGet(int $refundId): Response
	{
		return $this->connector->send(new RefundIdGet($refundId));
	}


	/**
	 * @param string $storeHash
	 */
	public function postrefundquotes(string $storeHash): Response
	{
		return $this->connector->send(new Postrefundquotes($storeHash));
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
	public function getrefunds(
		string $storeHash,
		array $orderIdIn,
		array $idIn,
		string $createdMin,
		string $createdMax,
	): Response
	{
		return $this->connector->send(new Getrefunds($storeHash, $orderIdIn, $idIn, $createdMin, $createdMax));
	}
}
