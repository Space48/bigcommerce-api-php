<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Pages\CreateApage;
use Space48\BigcommerceApi\Requests\Pages\DeleteApage;
use Space48\BigcommerceApi\Requests\Pages\GetAllPages;
use Space48\BigcommerceApi\Requests\Pages\GetApage;
use Space48\BigcommerceApi\Requests\Pages\UpdateApage;
use Space48\BigcommerceApi\Resource;

class Pages extends Resource
{
	public function getAllPages(): Response
	{
		return $this->connector->send(new GetAllPages());
	}


	public function createApage(): Response
	{
		return $this->connector->send(new CreateApage());
	}


	/**
	 * @param int $id ID of the page.
	 */
	public function getApage(int $id): Response
	{
		return $this->connector->send(new GetApage($id));
	}


	/**
	 * @param int $id ID of the page.
	 */
	public function updateApage(int $id): Response
	{
		return $this->connector->send(new UpdateApage($id));
	}


	/**
	 * @param int $id ID of the page.
	 */
	public function deleteApage(int $id): Response
	{
		return $this->connector->send(new DeleteApage($id));
	}
}
