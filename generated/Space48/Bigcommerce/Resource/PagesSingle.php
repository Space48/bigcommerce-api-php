<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PagesSingle\ContentPageDelete;
use Space48\Bigcommerce\Requests\PagesSingle\ContentPageGet;
use Space48\Bigcommerce\Requests\PagesSingle\ContentPagePut;
use Space48\Bigcommerce\Resource;

class PagesSingle extends Resource
{
	/**
	 * @param string $pageId The ID of the page to be operated on.
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function contentPageGet(string $pageId, string $include): Response
	{
		return $this->connector->send(new ContentPageGet($pageId, $include));
	}


	/**
	 * @param string $pageId The ID of the page to be operated on.
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function contentPagePut(string $pageId, string $include): Response
	{
		return $this->connector->send(new ContentPagePut($pageId, $include));
	}


	/**
	 * @param string $pageId The ID of the page to be operated on.
	 */
	public function contentPageDelete(string $pageId): Response
	{
		return $this->connector->send(new ContentPageDelete($pageId));
	}
}
