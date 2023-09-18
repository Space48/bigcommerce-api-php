<?php

namespace Space48\Bigcommerce\Requests\TaxProviderConnection;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteTaxProviderConnection
 *
 * Remove any previously set basic connection credentials for the specified provider. If the specified
 * provider is the active tax provider on the store, the store's active tax provider will be reset to
 * BigCommerce Manual Tax. It is suggested to call this endpoint during a single-click app [uninstall
 * callback](/api-docs/apps/guide/callbacks#uninstall-callback).
 *
 * > #### Note
 * > * This operation will
 * be logged in [Store Logs](https://support.bigcommerce.com/s/article/Using-Store-Logs) under **Staff
 * Actions**.
 * > * Requires **write** permissions on the **Information and Settings**
 * [scope](/api-docs/getting-started/api-accounts#oauth-scopes).
 */
class DeleteTaxProviderConnection extends Request
{
	protected Method $method = Method::DELETE;


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
