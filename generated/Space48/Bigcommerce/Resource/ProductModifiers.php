<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ProductModifiers\CreateModifier;
use Space48\Bigcommerce\Requests\ProductModifiers\DeleteModifierById;
use Space48\Bigcommerce\Requests\ProductModifiers\GetModifierById;
use Space48\Bigcommerce\Requests\ProductModifiers\GetModifiers;
use Space48\Bigcommerce\Requests\ProductModifiers\UpdateModifier;
use Space48\Bigcommerce\Resource;

class ProductModifiers extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getModifiers(int $productId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetModifiers($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createModifier(int $productId): Response
	{
		return $this->connector->send(new CreateModifier($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getModifierById(
		int $productId,
		int $modifierId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetModifierById($productId, $modifierId, $modifierId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 */
	public function updateModifier(int $productId, int $modifierId): Response
	{
		return $this->connector->send(new UpdateModifier($productId, $modifierId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $modifierId The ID of the `Modifier`.
	 */
	public function deleteModifierById(int $productId, int $modifierId): Response
	{
		return $this->connector->send(new DeleteModifierById($productId, $modifierId, $modifierId));
	}
}
