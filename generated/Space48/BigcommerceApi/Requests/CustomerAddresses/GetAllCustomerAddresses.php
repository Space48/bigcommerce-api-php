<?php

namespace Space48\BigcommerceApi\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllCustomerAddresses
 *
 * Returns a list of *Customer Addresses*. Returns the addresses belonging to a customer. Default
 * sorting is by address id, from lowest to highest.
 * The maximum limit is 250. If a limit isn’t
 * provided, up to 50 `customer_addresses` are returned by default.
 */
class GetAllCustomerAddresses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}/addresses";
	}


	/**
	 * @param int $customerId Unique numeric ID of the customer.
	 */
	public function __construct(
		protected int $customerId,
	) {
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
