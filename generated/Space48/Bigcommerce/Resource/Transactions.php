<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Transactions\GetOrderTransactions;
use Space48\Bigcommerce\Resource;

class Transactions extends Resource
{
	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function getOrderTransactions(int $orderId): Response
	{
		return $this->connector->send(new GetOrderTransactions($orderId));
	}
}
