<?php

namespace Space48\Bigcommerce\Requests\Wishlists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWishlists
 *
 * Returns a list of wishlists. Optional filter parameters can be passed in.
 */
class GetWishlists extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/wishlists";
	}


	/**
	 * @param null|int $customerId All wishlists relating to the customer.
	 */
	public function __construct(
		protected ?int $customerId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['customer_id' => $this->customerId]);
	}
}
