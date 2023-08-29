<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CategoryTrees\DeleteCategoryTrees;
use Space48\Bigcommerce\Requests\CategoryTrees\GetCategoryTrees;
use Space48\Bigcommerce\Requests\CategoryTrees\UpsertCategoryTrees;
use Space48\Bigcommerce\Resource;

class CategoryTrees extends Resource
{
	/**
	 * @param string $idIn
	 * @param string $channelIdIn
	 */
	public function getCategoryTrees(string $idIn, string $channelIdIn): Response
	{
		return $this->connector->send(new GetCategoryTrees($idIn, $channelIdIn));
	}


	public function upsertCategoryTrees(): Response
	{
		return $this->connector->send(new UpsertCategoryTrees());
	}


	/**
	 * @param string $idIn
	 */
	public function deleteCategoryTrees(string $idIn): Response
	{
		return $this->connector->send(new DeleteCategoryTrees($idIn));
	}
}
