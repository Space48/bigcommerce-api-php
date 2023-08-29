<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Images\CreateProductImage;
use Space48\Bigcommerce\Requests\Images\DeleteProductImage;
use Space48\Bigcommerce\Requests\Images\GetProductImageById;
use Space48\Bigcommerce\Requests\Images\GetProductImages;
use Space48\Bigcommerce\Requests\Images\UpdateProductImage;
use Space48\Bigcommerce\Resource;

class Images extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductImages(int $productId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetProductImages($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createProductImage(int $productId): Response
	{
		return $this->connector->send(new CreateProductImage($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $imageId The ID of the `Image` that is being operated on.
	 * @param int $imageId The ID of the `Image` that is being operated on.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductImageById(
		int $productId,
		int $imageId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductImageById($productId, $imageId, $imageId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $imageId The ID of the `Image` that is being operated on.
	 */
	public function updateProductImage(int $productId, int $imageId): Response
	{
		return $this->connector->send(new UpdateProductImage($productId, $imageId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $imageId The ID of the `Image` that is being operated on.
	 * @param int $imageId The ID of the `Image` that is being operated on.
	 */
	public function deleteProductImage(int $productId, int $imageId): Response
	{
		return $this->connector->send(new DeleteProductImage($productId, $imageId, $imageId));
	}
}
