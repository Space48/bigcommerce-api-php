<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\PagesBulk\DeletePages;
use Space48\Bigcommerce\Requests\PagesBulk\GetPages;
use Space48\Bigcommerce\Requests\PagesBulk\UpdatePages;
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
	public function getPages(
		?int $channelId,
		?string $idIn,
		?string $name,
		?string $nameLike,
		?string $include,
	): Response
	{
		return $this->connector->send(new GetPages($channelId, $idIn, $name, $nameLike, $include));
	}


	/**
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function updatePages(?string $include): Response
	{
		return $this->connector->send(new UpdatePages($include));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $include Include the requested property in the response. The `body` property returns the page’s markup, text, or raw content.
	 */
	public function updatePagesDuplicate1(?string $include): Response
	{
		return $this->connector->send(new UpdatePages($include));
	}


	/**
	 * @param string $idIn Request deletion of multiple pages by passing a comma-separated string of corresponding page IDs. Supports bulk operations.
	 */
	public function deletePages(string $idIn): Response
	{
		return $this->connector->send(new DeletePages($idIn));
	}
}
