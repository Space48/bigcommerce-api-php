<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderProducts\GetOrderProduct;
use Space48\Bigcommerce\Requests\OrderProducts\GetOrderProducts;
use Space48\Bigcommerce\Resource;

class OrderProducts extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 */
	public function getOrderProducts(int $orderId): Response
	{
		return $this->connector->send(new GetOrderProducts($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $productId ID of the product.
	 */
	public function getOrderProduct(int $orderId, int $productId): Response
	{
		return $this->connector->send(new GetOrderProduct($orderId, $productId));
	}
}
