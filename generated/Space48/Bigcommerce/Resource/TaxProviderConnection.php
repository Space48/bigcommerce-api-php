<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\TaxProviderConnection\ProviderConnectionDelete;
use Space48\Bigcommerce\Requests\TaxProviderConnection\ProviderConnectionGet;
use Space48\Bigcommerce\Requests\TaxProviderConnection\ProviderConnectionPut;
use Space48\Bigcommerce\Resource;

class TaxProviderConnection extends Resource
{
	/**
	 * @param string $providerId The Tax Providerʼs `provider_id` provided by BigCommerce after the provider [shares their provider details](/api-docs/providers/tax#sharing-provider-details-with-bigcommerce).
	 */
	public function providerConnectionGet(string $providerId): Response
	{
		return $this->connector->send(new ProviderConnectionGet($providerId));
	}


	/**
	 * @param string $providerId The Tax Providerʼs `provider_id` provided by BigCommerce after the provider [shares their provider details](/api-docs/providers/tax#sharing-provider-details-with-bigcommerce).
	 */
	public function providerConnectionPut(string $providerId): Response
	{
		return $this->connector->send(new ProviderConnectionPut($providerId));
	}


	/**
	 * @param string $providerId The Tax Providerʼs `provider_id` provided by BigCommerce after the provider [shares their provider details](/api-docs/providers/tax#sharing-provider-details-with-bigcommerce).
	 */
	public function providerConnectionDelete(string $providerId): Response
	{
		return $this->connector->send(new ProviderConnectionDelete($providerId));
	}
}
