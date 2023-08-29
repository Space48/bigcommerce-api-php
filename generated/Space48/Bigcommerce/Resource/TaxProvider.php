<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\TaxProvider\Adjust;
use Space48\Bigcommerce\Requests\TaxProvider\Commit;
use Space48\Bigcommerce\Requests\TaxProvider\Estimate;
use Space48\Bigcommerce\Requests\TaxProvider\VoidRequest;
use Space48\Bigcommerce\Resource;

class TaxProvider extends Resource
{
	public function estimate(): Response
	{
		return $this->connector->send(new Estimate());
	}


	/**
	 * @param string $id Unique ID identifying the existing, persisted Tax Quote that will be voided.
	 */
	public function voidRequest(string $id): Response
	{
		return $this->connector->send(new VoidRequest($id));
	}


	public function commit(): Response
	{
		return $this->connector->send(new Commit());
	}


	/**
	 * @param string $id Unique ID identifying the existing, persisted Tax Quote that will be adjusted.
	 */
	public function adjust(string $id): Response
	{
		return $this->connector->send(new Adjust($id));
	}
}
