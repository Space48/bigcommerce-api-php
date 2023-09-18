<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ProductModifiers\CreateProductModifier;
use Space48\Bigcommerce\Requests\ProductModifiers\DeleteProductModifier;
use Space48\Bigcommerce\Requests\ProductModifiers\GetProductModifier;
use Space48\Bigcommerce\Requests\ProductModifiers\GetProductModifiers;
use Space48\Bigcommerce\Requests\ProductModifiers\UpdateProductModifier;
use Space48\Bigcommerce\Resource;

class ProductModifiers extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductModifiers(int $productId, ?string $includeFields, ?string $excludeFields): Response
	{
		return $this->connector->send(new GetProductModifiers($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createProductModifier(int $productId): Response
	{
		return $this->connector->send(new CreateProductModifier($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductModifier(
		int $productId,
		int $modifierId,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductModifier($productId, $modifierId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 */
	public function updateProductModifier(int $productId, int $modifierId): Response
	{
		return $this->connector->send(new UpdateProductModifier($productId, $modifierId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 */
	public function deleteProductModifier(int $productId, int $modifierId): Response
	{
		return $this->connector->send(new DeleteProductModifier($productId, $modifierId));
	}
}
