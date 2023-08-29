<?php

namespace Space48\Bigcommerce\Requests\TaxProviderConnection;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * provider-connection-put
 *
 * Set authentication information associated with a merchant's account on the tax provider's
 * infrastructure:
 * - [HTTP Basic
 * Authentication](https://developer.mozilla.org/en-US/docs/Web/HTTP/Authentication)
 * (developer.mozilla.org) credentials
 * - (optional) Tax provider profile used in customized endpoint
 * urls for tax provider calls. This is only available for tax providers that support this
 * feature.
 *
 * The configured `username`, `password`, and `profile` (if available) is used to
 * authenticate each API request to the Tax Provider from the associated store.
 * The tax provider's
 * `profile` will be included in the url for [Tax Provider API](/docs/apps-api/tax) endpoints.
 *
 * > ####
 * Note
 * > * This operation will be logged in [Store
 * Logs](https://support.bigcommerce.com/s/article/Using-Store-Logs) under **Staff Actions**.
 * > *
 * Requires **write** permissions on the **Information and Settings**
 * [scope](/api-docs/getting-started/api-accounts#oauth-scopes).
 */
class ProviderConnectionPut extends Request
{
	protected Method $method = Method::PUT;


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
