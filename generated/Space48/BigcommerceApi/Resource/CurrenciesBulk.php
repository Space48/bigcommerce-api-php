<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CurrenciesBulk\CreateAcurrency;
use Space48\BigcommerceApi\Requests\CurrenciesBulk\DeleteAllCurrencies;
use Space48\BigcommerceApi\Requests\CurrenciesBulk\GetAllCurrencies;
use Space48\BigcommerceApi\Resource;

class CurrenciesBulk extends Resource
{
	public function getAllCurrencies(): Response
	{
		return $this->connector->send(new GetAllCurrencies());
	}


	public function createAcurrency(): Response
	{
		return $this->connector->send(new CreateAcurrency());
	}


	public function deleteAllCurrencies(): Response
	{
		return $this->connector->send(new DeleteAllCurrencies());
	}
}
