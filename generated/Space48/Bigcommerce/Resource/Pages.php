<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Pages\CreatePage;
use Space48\Bigcommerce\Requests\Pages\DeletePage;
use Space48\Bigcommerce\Requests\Pages\GetPage;
use Space48\Bigcommerce\Requests\Pages\GetPages;
use Space48\Bigcommerce\Requests\Pages\UpdatePage;
use Space48\Bigcommerce\Resource;

class Pages extends Resource
{
	public function getPages(): Response
	{
		return $this->connector->send(new GetPages());
	}


	public function createPage(): Response
	{
		return $this->connector->send(new CreatePage());
	}


	/**
	 * @param int $id ID of the page.
	 */
	public function getPage(int $id): Response
	{
		return $this->connector->send(new GetPage($id));
	}


	/**
	 * @param int $id ID of the page.
	 */
	public function updatePage(int $id): Response
	{
		return $this->connector->send(new UpdatePage($id));
	}


	/**
	 * @param int $id ID of the page.
	 */
	public function deletePage(int $id): Response
	{
		return $this->connector->send(new DeletePage($id));
	}
}
