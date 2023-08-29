<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Taxes\GetAllTaxClasses;
use Space48\Bigcommerce\Requests\Taxes\GetAtaxClass;
use Space48\Bigcommerce\Resource;

class Taxes extends Resource
{
	public function getAllTaxClasses(): Response
	{
		return $this->connector->send(new GetAllTaxClasses());
	}


	/**
	 * @param int $id ID of the tax class.
	 */
	public function getAtaxClass(int $id): Response
	{
		return $this->connector->send(new GetAtaxClass($id));
	}
}
