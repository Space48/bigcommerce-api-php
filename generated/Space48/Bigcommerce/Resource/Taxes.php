<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Taxes\GetTaxClass;
use Space48\Bigcommerce\Requests\Taxes\GetTaxClasses;
use Space48\Bigcommerce\Resource;

class Taxes extends Resource
{
	public function getTaxClasses(): Response
	{
		return $this->connector->send(new GetTaxClasses());
	}


	/**
	 * @param int $id ID of the tax class.
	 */
	public function getTaxClass(int $id): Response
	{
		return $this->connector->send(new GetTaxClass($id));
	}
}
