<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\SearchFilters\GetAvailable;
use Space48\Bigcommerce\Requests\SearchFilters\GetContexts;
use Space48\Bigcommerce\Requests\SearchFilters\GetEnabled;
use Space48\Bigcommerce\Requests\SearchFilters\UpdateEnabled;
use Space48\Bigcommerce\Requests\SearchFilters\UpsertContexts;
use Space48\Bigcommerce\Resource;

class SearchFilters extends Resource
{
	public function getEnabled(): Response
	{
		return $this->connector->send(new GetEnabled());
	}


	public function updateEnabled(): Response
	{
		return $this->connector->send(new UpdateEnabled());
	}


	/**
	 * @param int $channelId Narrows the list of available filters based on channel ID. Only products currently assigned to the given Channel will be considered.
	 * @param int $categoryId Narrows the list of available filters based on category ID. You can display settings to show products from the provided category, subcategories only, or both the category and its child categories.
	 */
	public function getAvailable(int $channelId, int $categoryId): Response
	{
		return $this->connector->send(new GetAvailable($channelId, $categoryId));
	}


	/**
	 * @param int $channelId Only return contextual overrides related to a particular Channel.
	 * @param int $categoryId Only return contextual overrides related to a particular Category.
	 */
	public function getContexts(int $channelId, int $categoryId): Response
	{
		return $this->connector->send(new GetContexts($channelId, $categoryId));
	}


	public function upsertContexts(): Response
	{
		return $this->connector->send(new UpsertContexts());
	}
}
