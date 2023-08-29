<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Videos\CreateProductVideo;
use Space48\Bigcommerce\Requests\Videos\DeleteProductVideo;
use Space48\Bigcommerce\Requests\Videos\GetProductVideoById;
use Space48\Bigcommerce\Requests\Videos\GetProductVideos;
use Space48\Bigcommerce\Requests\Videos\UpdateProductVideo;
use Space48\Bigcommerce\Resource;

class Videos extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductVideos(int $productId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetProductVideos($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createProductVideo(int $productId): Response
	{
		return $this->connector->send(new CreateProductVideo($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $id The BigCommerce ID of the `Video`
	 * @param int $id The BigCommerce ID of the `Video`
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductVideoById(int $productId, int $id, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetProductVideoById($productId, $id, $id, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $id The BigCommerce ID of the `Video`
	 */
	public function updateProductVideo(int $productId, int $id): Response
	{
		return $this->connector->send(new UpdateProductVideo($productId, $id));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $id The BigCommerce ID of the `Video`
	 * @param int $id The BigCommerce ID of the `Video`
	 */
	public function deleteProductVideo(int $productId, int $id): Response
	{
		return $this->connector->send(new DeleteProductVideo($productId, $id, $id));
	}
}
