<?php

namespace Space48\Bigcommerce\Requests\Subscribers;

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
	 * @param null|string $email Filter items by email.
	 * @param null|string $firstName Filter items by first_name.
	 * @param null|string $lastName Filter items by last_name.
	 * @param null|string $source Filter items by source.
	 * @param null|int $orderId Filter items by order_id.
	 * @param null|string $dateCreated Filter items by date_created.
	 * @param null|string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
	 * @param null|int $id Filter items by id.
	 */
	public function __construct(
		protected ?string $email = null,
		protected ?string $firstName = null,
		protected ?string $lastName = null,
		protected ?string $source = null,
		protected ?int $orderId = null,
		protected ?string $dateCreated = null,
		protected ?string $dateModified = null,
		protected ?int $id = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'email' => $this->email,
			'first_name' => $this->firstName,
			'last_name' => $this->lastName,
			'source' => $this->source,
			'order_id' => $this->orderId,
			'date_created' => $this->dateCreated,
			'date_modified' => $this->dateModified,
			'id' => $this->id,
		]);
	}
}
