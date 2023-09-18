<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\TaxProviderConnection\DeleteTaxProviderConnection;
use Space48\Bigcommerce\Requests\TaxProviderConnection\GetTaxProviderConnection;
use Space48\Bigcommerce\Requests\TaxProviderConnection\UpdateTaxProviderConnection;
use Space48\Bigcommerce\Resource;

class TaxProviderConnection extends Resource
{
	/**
	 * @param string $providerId The Tax Providerʼs `provider_id` provided by BigCommerce after the provider [shares their provider details](/api-docs/providers/tax#sharing-provider-details-with-bigcommerce).
	 */
	public function getTaxProviderConnection(string $providerId): Response
	{
		return $this->connector->send(new GetTaxProviderConnection($providerId));
	}


	/**
	 * @param string $providerId The Tax Providerʼs `provider_id` provided by BigCommerce after the provider [shares their provider details](/api-docs/providers/tax#sharing-provider-details-with-bigcommerce).
	 */
	public function updateTaxProviderConnection(string $providerId): Response
	{
		return $this->connector->send(new UpdateTaxProviderConnection($providerId));
	}


	/**
	 * @param string $providerId The Tax Providerʼs `provider_id` provided by BigCommerce after the provider [shares their provider details](/api-docs/providers/tax#sharing-provider-details-with-bigcommerce).
	 */
	public function deleteTaxProviderConnection(string $providerId): Response
	{
		return $this->connector->send(new DeleteTaxProviderConnection($providerId));
	}
}
