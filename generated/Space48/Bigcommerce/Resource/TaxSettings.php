<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\TaxSettings\GetTaxSettings;
use Space48\Bigcommerce\Requests\TaxSettings\SetTaxSettings;
use Space48\Bigcommerce\Resource;

class TaxSettings extends Resource
{
	public function getTaxSettings(): Response
	{
		return $this->connector->send(new GetTaxSettings());
	}


	public function setTaxSettings(): Response
	{
		return $this->connector->send(new SetTaxSettings());
	}
}
