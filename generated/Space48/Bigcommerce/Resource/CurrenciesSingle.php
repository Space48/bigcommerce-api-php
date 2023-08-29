<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CurrenciesSingle\DeleteAcurrency;
use Space48\Bigcommerce\Requests\CurrenciesSingle\GetAcurrency;
use Space48\Bigcommerce\Requests\CurrenciesSingle\UpdateAcurrency;
use Space48\Bigcommerce\Resource;

class CurrenciesSingle extends Resource
{
	/**
	 * @param string $id Currency ID
	 */
	public function getAcurrency(string $id): Response
	{
		return $this->connector->send(new GetAcurrency($id));
	}


	/**
	 * @param string $id Currency ID
	 */
	public function updateAcurrency(string $id): Response
	{
		return $this->connector->send(new UpdateAcurrency($id));
	}


	/**
	 * @param string $id Currency ID
	 */
	public function deleteAcurrency(string $id): Response
	{
		return $this->connector->send(new DeleteAcurrency($id));
	}
}
