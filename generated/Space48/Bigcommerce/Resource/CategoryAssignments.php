<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CategoryAssignments\CreateProductsCategoryAssignments;
use Space48\Bigcommerce\Requests\CategoryAssignments\DeleteProductsCategoryAssignments;
use Space48\Bigcommerce\Requests\CategoryAssignments\GetProductsCategoryAssignments;
use Space48\Bigcommerce\Resource;

class CategoryAssignments extends Resource
{
	/**
	 * @param string $productIdIn
	 * @param string $categoryIdIn
	 */
	public function getProductsCategoryAssignments(?string $productIdIn, ?string $categoryIdIn): Response
	{
		return $this->connector->send(new GetProductsCategoryAssignments($productIdIn, $categoryIdIn));
	}


	public function createProductsCategoryAssignments(): Response
	{
		return $this->connector->send(new CreateProductsCategoryAssignments());
	}


	/**
	 * @param string $productIdIn
	 * @param string $categoryIdIn
	 */
	public function deleteProductsCategoryAssignments(?string $productIdIn, ?string $categoryIdIn): Response
	{
		return $this->connector->send(new DeleteProductsCategoryAssignments($productIdIn, $categoryIdIn));
	}
}
