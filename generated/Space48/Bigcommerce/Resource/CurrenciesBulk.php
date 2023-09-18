<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CurrenciesBulk\CreateCurrency;
use Space48\Bigcommerce\Requests\CurrenciesBulk\DeleteCurrencies;
use Space48\Bigcommerce\Requests\CurrenciesBulk\GetCurrencies;
use Space48\Bigcommerce\Resource;

class CurrenciesBulk extends Resource
{
	public function getCurrencies(): Response
	{
		return $this->connector->send(new GetCurrencies());
	}


	public function createCurrency(): Response
	{
		return $this->connector->send(new CreateCurrency());
	}


	public function deleteCurrencies(): Response
	{
		return $this->connector->send(new DeleteCurrencies());
	}
}
