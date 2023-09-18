<?php

namespace Space48\Bigcommerce\Requests\TaxProviderConnection;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getTaxProviderConnection
 *
 * Retrieve the connection status of the specified tax provider in the context of a store.
 *
 * > ####
 * Note
 * > * Requires **read** permissions on the **Information and Settings** scope.
 */
class GetTaxProviderConnection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax/providers/{$this->providerId}/connection";
	}


	/**
	 * @param string $providerId The Tax Providerʼs `provider_id` provided by BigCommerce after the provider [shares their provider details](/api-docs/providers/tax#sharing-provider-details-with-bigcommerce).
	 */
	public function __construct(
		protected string $providerId,
	) {
	}
}
