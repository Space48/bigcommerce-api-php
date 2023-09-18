<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Values\CreateProductModifierValue;
use Space48\Bigcommerce\Requests\Values\DeleteProductModifierValue;
use Space48\Bigcommerce\Requests\Values\GetProductModifierValue;
use Space48\Bigcommerce\Requests\Values\GetProductModifierValues;
use Space48\Bigcommerce\Requests\Values\UpdateProductModifierValue;
use Space48\Bigcommerce\Resource;

class Values extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductModifierValues(
		int $productId,
		int $modifierId,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductModifierValues($productId, $modifierId, $modifierId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 */
	public function createProductModifierValue(int $productId, int $modifierId): Response
	{
		return $this->connector->send(new CreateProductModifierValue($productId, $modifierId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductModifierValue(
		int $productId,
		int $modifierId,
		int $valueId,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductModifierValue($productId, $modifierId, $valueId, $modifierId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 */
	public function updateProductModifierValue(int $productId, int $modifierId, int $valueId): Response
	{
		return $this->connector->send(new UpdateProductModifierValue($productId, $modifierId, $valueId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 * @param int $modifierId The ID of the `Modifier`.
	 */
	public function deleteProductModifierValue(int $productId, int $modifierId, int $valueId): Response
	{
		return $this->connector->send(new DeleteProductModifierValue($productId, $modifierId, $valueId, $modifierId));
	}
}
