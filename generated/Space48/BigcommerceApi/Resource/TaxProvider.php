<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\TaxProvider\Adjust;
use Space48\BigcommerceApi\Requests\TaxProvider\Commit;
use Space48\BigcommerceApi\Requests\TaxProvider\Estimate;
use Space48\BigcommerceApi\Requests\TaxProvider\Void;
use Space48\BigcommerceApi\Resource;

class TaxProvider extends Resource
{
	public function estimate(): Response
	{
		return $this->connector->send(new Estimate());
	}


	/**
	 * @param string $id Unique ID identifying the existing, persisted Tax Quote that will be voided.
	 */
	public function void(string $id): Response
	{
		return $this->connector->send(new Void($id));
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
