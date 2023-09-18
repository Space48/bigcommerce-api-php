<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\SearchFilters\GetSettingsAvailableFilters;
use Space48\Bigcommerce\Requests\SearchFilters\GetSettingsEnabledSearchFilters;
use Space48\Bigcommerce\Requests\SearchFilters\GetSettingsFiltersContexts;
use Space48\Bigcommerce\Requests\SearchFilters\UpdateSettingsEnabledSearchFilters;
use Space48\Bigcommerce\Requests\SearchFilters\UpsertSettingsFiltersContexts;
use Space48\Bigcommerce\Resource;

class SearchFilters extends Resource
{
	public function getSettingsEnabledSearchFilters(): Response
	{
		return $this->connector->send(new GetSettingsEnabledSearchFilters());
	}


	public function updateSettingsEnabledSearchFilters(): Response
	{
		return $this->connector->send(new UpdateSettingsEnabledSearchFilters());
	}


	/**
	 * @param int $channelId Narrows the list of available filters based on channel ID. Only products currently assigned to the given Channel will be considered.
	 * @param int $categoryId Narrows the list of available filters based on category ID. You can display settings to show products from the provided category, subcategories only, or both the category and its child categories.
	 */
	public function getSettingsAvailableFilters(?int $channelId, ?int $categoryId): Response
	{
		return $this->connector->send(new GetSettingsAvailableFilters($channelId, $categoryId));
	}


	/**
	 * @param int $channelId Only return contextual overrides related to a particular Channel.
	 * @param int $categoryId Only return contextual overrides related to a particular Category.
	 */
	public function getSettingsFiltersContexts(?int $channelId, ?int $categoryId): Response
	{
		return $this->connector->send(new GetSettingsFiltersContexts($channelId, $categoryId));
	}


	public function upsertSettingsFiltersContexts(): Response
	{
		return $this->connector->send(new UpsertSettingsFiltersContexts());
	}
}
