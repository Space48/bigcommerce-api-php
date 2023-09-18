<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CurrenciesSingle\DeleteCurrency;
use Space48\Bigcommerce\Requests\CurrenciesSingle\GetCurrency;
use Space48\Bigcommerce\Requests\CurrenciesSingle\UpdateCurrency;
use Space48\Bigcommerce\Resource;

class CurrenciesSingle extends Resource
{
	/**
	 * @param string $id Currency ID
	 */
	public function getCurrency(string $id): Response
	{
		return $this->connector->send(new GetCurrency($id));
	}


	/**
	 * @param string $id Currency ID
	 */
	public function updateCurrency(string $id): Response
	{
		return $this->connector->send(new UpdateCurrency($id));
	}


	/**
	 * @param string $id Currency ID
	 */
	public function deleteCurrency(string $id): Response
	{
		return $this->connector->send(new DeleteCurrency($id));
	}
}
