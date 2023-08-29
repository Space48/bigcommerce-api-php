<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PagesBulk\ContentPagesDelete;
use Space48\Bigcommerce\Requests\PagesBulk\ContentPagesGet;
use Space48\Bigcommerce\Requests\PagesBulk\ContentPagesPost;
use Space48\Bigcommerce\Requests\PagesBulk\ContentPagesPut;
use Space48\Bigcommerce\Resource;

class PagesBulk extends Resource
{
	/**
	 * @param int $channelId Return only pages associated with the specified channel.
	 * @param string $idIn A comma-separated string of page IDs to fetch. Supports bulk operations. If none of the page IDs passed exist, the query will return an empty `data` array.
	 * @param string $name Name of the page.
	 * @param string $nameLike Return only pages whose `name` or `body` contain the supplied string.
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function contentPagesGet(
		int $channelId,
		string $idIn,
		string $name,
		string $nameLike,
		string $include,
	): Response
	{
		return $this->connector->send(new ContentPagesGet($channelId, $idIn, $name, $nameLike, $include));
	}


	/**
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function contentPagesPut(string $include): Response
	{
		return $this->connector->send(new ContentPagesPut($include));
	}


	/**
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function contentPagesPost(string $include): Response
	{
		return $this->connector->send(new ContentPagesPost($include));
	}


	/**
	 * @param string $idIn Request deletion of multiple pages by passing a comma-separated string of corresponding page IDs. Supports bulk operations.
	 */
	public function contentPagesDelete(string $idIn): Response
	{
		return $this->connector->send(new ContentPagesDelete($idIn));
	}
}
