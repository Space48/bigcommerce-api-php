<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Values\CreateOptionValue;
use Space48\BigcommerceApi\Requests\Values\DeleteOptionValueById;
use Space48\BigcommerceApi\Requests\Values\GetOptionValueById;
use Space48\BigcommerceApi\Requests\Values\GetOptionValues;
use Space48\BigcommerceApi\Requests\Values\UpdateOptionValue;
use Space48\BigcommerceApi\Resource;

class Values extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $optionId The ID of the `Option`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getOptionValues(
		int $productId,
		int $optionId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetOptionValues($productId, $optionId, $optionId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 */
	public function createOptionValue(int $productId, int $optionId): Response
	{
		return $this->connector->send(new CreateOptionValue($productId, $optionId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 * @param int $optionId The ID of the `Option`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getOptionValueById(
		int $productId,
		int $optionId,
		int $valueId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetOptionValueById($productId, $optionId, $valueId, $optionId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 */
	public function updateOptionValue(int $productId, int $optionId, int $valueId): Response
	{
		return $this->connector->send(new UpdateOptionValue($productId, $optionId, $valueId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 * @param int $optionId The ID of the `Option`.
	 */
	public function deleteOptionValueById(int $productId, int $optionId, int $valueId): Response
	{
		return $this->connector->send(new DeleteOptionValueById($productId, $optionId, $valueId, $optionId));
	}
}
