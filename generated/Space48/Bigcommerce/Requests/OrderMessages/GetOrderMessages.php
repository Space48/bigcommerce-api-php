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
	 * @param null|int $minId The minimum order ID.
	 * @param null|int $maxId The maximum order ID.
	 * @param null|int $customerId Customer ID.
	 * @param null|string $minDateCreated Minimum date the order was created in RFC-2822 or ISO-8601.
	 *
	 * RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`
	 *
	 * ISO-8601: `2017-04-20T11:32:00.000-04:00`
	 * @param null|string $maxDateCreated Maximum date the order was created in RFC-2822 or ISO-8601.
	 *
	 * RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`
	 *
	 * ISO-8601: `2017-04-20T11:32:00.000-04:00`
	 * @param null|bool $isFlagged If the message is [flagged](https://support.bigcommerce.com/s/article/Communicating-with-Customers#Messages).
	 * @param null|string $status Status of the order message.
	 */
	public function __construct(
		protected int $orderId,
		protected ?int $minId = null,
		protected ?int $maxId = null,
		protected ?int $customerId = null,
		protected ?string $minDateCreated = null,
		protected ?string $maxDateCreated = null,
		protected ?bool $isFlagged = null,
		protected ?string $status = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'min_id' => $this->minId,
			'max_id' => $this->maxId,
			'customer_id' => $this->customerId,
			'min_date_created' => $this->minDateCreated,
			'max_date_created' => $this->maxDateCreated,
			'is_flagged' => $this->isFlagged,
			'status' => $this->status,
		]);
	}
}
