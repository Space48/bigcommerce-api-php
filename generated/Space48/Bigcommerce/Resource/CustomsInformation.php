<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomsInformation\DeleteCustomsInformation;
use Space48\Bigcommerce\Requests\CustomsInformation\GetCustomsInformation;
use Space48\Bigcommerce\Requests\CustomsInformation\PutCustomsInformation;
use Space48\Bigcommerce\Resource;

class CustomsInformation extends Resource
{
	/**
	 * @param array $productIdIn A comma-separated list of product IDs. For more information, see [Filtering](/api-docs/getting-started/filtering).
	 */
	public function getCustomsInformation(array $productIdIn): Response
	{
		return $this->connector->send(new GetCustomsInformation($productIdIn));
	}


	public function putCustomsInformation(): Response
	{
		return $this->connector->send(new PutCustomsInformation());
	}


	/**
	 * @param string $productIdIn
	 */
	public function deleteCustomsInformation(string $productIdIn): Response
	{
		return $this->connector->send(new DeleteCustomsInformation($productIdIn));
	}
}
