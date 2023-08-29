<?php

namespace Space48\Bigcommerce\Requests\Wishlists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * WishlistsGet
 *
 * Returns a list of wishlists. Optional filter parameters can be passed in.
 */
class WishlistsGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/wishlists";
	}


	/**
	 * @param int $customerId All wishlists relating to the customer.
	 */
	public function __construct(
		protected int $customerId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['customer_id' => $this->customerId];
	}
}
