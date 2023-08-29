<?php

namespace Space48\Bigcommerce\Requests\OrderMessages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderMessages
 *
 * Gets the messages associated with an order.
 */
class GetOrderMessages extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/messages";
	}


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
	public function __construct(
		protected int $orderId,
		protected int $minId,
		protected int $maxId,
		protected int $customerId,
		protected string $minDateCreated,
		protected string $maxDateCreated,
		protected bool $isFlagged,
		protected string $status,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'min_id' => $this->minId,
			'max_id' => $this->maxId,
			'customer_id' => $this->customerId,
			'min_date_created' => $this->minDateCreated,
			'max_date_created' => $this->maxDateCreated,
			'is_flagged' => $this->isFlagged,
			'status' => $this->status,
		];
	}
}
