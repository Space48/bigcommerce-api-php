<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\OrderMessages\GetOrderMessages;
use Space48\Bigcommerce\Resource;

class OrderMessages extends Resource
{
	/**
	 * @param int $orderId ID of the order.
	 * @param int $minId The minimum order ID.
	 * @param int $maxId The maximum order ID.
	 * @param int $customerId Customer ID.
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
	 * @param bool $isFlagged If the message is [flagged](https://support.bigcommerce.com/s/article/Communicating-with-Customers#Messages).
	 * @param string $status Status of the order message.
	 */
	public function getOrderMessages(
		int $orderId,
		int $minId,
		int $maxId,
		int $customerId,
		string $minDateCreated,
		string $maxDateCreated,
		bool $isFlagged,
		string $status,
	): Response
	{
		return $this->connector->send(new GetOrderMessages($orderId, $minId, $maxId, $customerId, $minDateCreated, $maxDateCreated, $isFlagged, $status));
	}
}
