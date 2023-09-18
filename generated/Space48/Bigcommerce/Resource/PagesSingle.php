<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PagesSingle\DeletePage;
use Space48\Bigcommerce\Requests\PagesSingle\GetPage;
use Space48\Bigcommerce\Requests\PagesSingle\UpdatePage;
use Space48\Bigcommerce\Resource;

class PagesSingle extends Resource
{
	/**
	 * @param string $pageId The ID of the page to be operated on.
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function getPage(string $pageId, ?string $include): Response
	{
		return $this->connector->send(new GetPage($pageId, $include));
	}


	/**
	 * @param string $pageId The ID of the page to be operated on.
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function updatePage(string $pageId, ?string $include): Response
	{
		return $this->connector->send(new UpdatePage($pageId, $include));
	}


	/**
	 * @param string $pageId The ID of the page to be operated on.
	 */
	public function deletePage(string $pageId): Response
	{
		return $this->connector->send(new DeletePage($pageId));
	}
}
