<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ProductVariantOptions\CreateOption;
use Space48\BigcommerceApi\Requests\ProductVariantOptions\DeleteOptionById;
use Space48\BigcommerceApi\Requests\ProductVariantOptions\GetOptionById;
use Space48\BigcommerceApi\Requests\ProductVariantOptions\GetOptions;
use Space48\BigcommerceApi\Requests\ProductVariantOptions\UpdateOption;
use Space48\BigcommerceApi\Resource;

class ProductVariantOptions extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getOptions(int $productId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetOptions($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createOption(int $productId): Response
	{
		return $this->connector->send(new CreateOption($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $optionId The ID of the `Option`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getOptionById(int $productId, int $optionId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetOptionById($productId, $optionId, $optionId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 */
	public function updateOption(int $productId, int $optionId): Response
	{
		return $this->connector->send(new UpdateOption($productId, $optionId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param int $optionId The ID of the `Option`.
	 */
	public function deleteOptionById(int $productId, int $optionId): Response
	{
		return $this->connector->send(new DeleteOptionById($productId, $optionId, $optionId));
	}
}
