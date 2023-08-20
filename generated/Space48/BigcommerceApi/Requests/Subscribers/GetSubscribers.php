<?php

namespace Space48\BigcommerceApi\Requests\Subscribers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSubscribers
 *
 * Returns a list of *Subscribers*. Optional filter parameters can be passed in.
 */
class GetSubscribers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/subscribers";
	}


	/**
	 * @param string $email Filter items by email.
	 * @param string $firstName Filter items by first_name.
	 * @param string $lastName Filter items by last_name.
	 * @param string $source Filter items by source.
	 * @param int $orderId Filter items by order_id.
	 * @param string $dateCreated Filter items by date_created.
	 * @param string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
	 * @param int $id Filter items by id.
	 */
	public function __construct(
		protected string $email,
		protected string $firstName,
		protected string $lastName,
		protected string $source,
		protected int $orderId,
		protected string $dateCreated,
		protected string $dateModified,
		protected int $id,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'email' => $this->email,
			'first_name' => $this->firstName,
			'last_name' => $this->lastName,
			'source' => $this->source,
			'order_id' => $this->orderId,
			'date_created' => $this->dateCreated,
			'date_modified' => $this->dateModified,
			'id' => $this->id,
		];
	}
}
