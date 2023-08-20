<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\OrderProducts\GetAllOrderProducts;
use Space48\BigcommerceApi\Requests\OrderProducts\GetAnOrderProduct;
use Space48\BigcommerceApi\Resource;

class OrderProducts extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 */
	public function getAllOrderProducts(int $orderId): Response
	{
		return $this->connector->send(new GetAllOrderProducts($orderId));
	}


	/**
	 * @param int $orderId ID of the order.
	 * @param int $productId ID of the product.
	 */
	public function getAnOrderProduct(int $orderId, int $productId): Response
	{
		return $this->connector->send(new GetAnOrderProduct($orderId, $productId));
	}
}
