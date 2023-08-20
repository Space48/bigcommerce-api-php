<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\TaxSettings\GetTaxSettings;
use Space48\BigcommerceApi\Requests\TaxSettings\SetTaxSettings;
use Space48\BigcommerceApi\Resource;

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
