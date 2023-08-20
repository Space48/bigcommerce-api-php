<?php

namespace Space48\BigcommerceApi\Requests\CustomerStoredInstruments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * liststoredinstruments
 *
 * Lists all available stored instruments for a customer. This list will include all types of stored
 * instruments namely card, account and bank_account instruments
 */
class Liststoredinstruments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->customerId}/stored-instruments";
	}


	/**
	 * @param string $customerId
	 */
	public function __construct(
		protected string $customerId,
	) {
	}
}
