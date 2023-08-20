<?php

namespace Space48\BigcommerceApi\Requests\CustomerAddresses;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createACustomerAddress
 *
 * Creates a new *Customer Address*. (Note: The “state” property cannot be null. As a workaround
 * for addresses that include no state/province string, pass a space as the “state”
 * value.)
 *
 * **Required Fields**
 * *   first_name
 * *   last_name
 * *   phone
 * *   street_1
 * *   city
 * *
 * state
 * *   zip
 * *   country
 *
 * **Read Only Fields**
 * *   id
 * *   country_iso2
 */
class CreateAcustomerAddress extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
}
