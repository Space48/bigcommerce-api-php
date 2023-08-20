<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Transactions\GetTransactions;
use Space48\BigcommerceApi\Resource;

class Transactions extends Resource
{
	/**
	 * @param int $orderId The ID of the `Order` to which the transactions belong.
	 */
	public function getTransactions(int $orderId): Response
	{
		return $this->connector->send(new GetTransactions($orderId));
	}
}
