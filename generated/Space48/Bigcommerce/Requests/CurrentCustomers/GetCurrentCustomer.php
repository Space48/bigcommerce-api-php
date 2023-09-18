<?php

namespace Space48\Bigcommerce\Requests\CurrentCustomers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCurrentCustomer
 *
 * Identify logged-in customers securely via JavaScript.
 *
 * > #### Note
 * > The Send a Test Request feature
 * is not currently supported for this endpoint.
 */
class GetCurrentCustomer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customer/current.jwt";
	}


	/**
	 * @param string $appClientId This is your applicationʼs client ID, which is obtained during application registration in the Developer Portal.
	 */
	public function __construct(
		protected string $appClientId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['app_client_id' => $this->appClientId]);
	}
}
