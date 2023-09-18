<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ProductVariantOptions\CreateProductVariantOption;
use Space48\Bigcommerce\Requests\ProductVariantOptions\DeleteProductVariantOption;
use Space48\Bigcommerce\Requests\ProductVariantOptions\GetProductVariantOption;
use Space48\Bigcommerce\Requests\ProductVariantOptions\GetProductVariantOptions;
use Space48\Bigcommerce\Requests\ProductVariantOptions\UpdateProductVariantOption;
use Space48\Bigcommerce\Resource;

class ProductVariantOptions extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductVariantOptions(int $productId, ?string $includeFields, ?string $excludeFields): Response
	{
		return $this->connector->send(new GetProductVariantOptions($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createProductVariantOption(int $productId): Response
	{
		return $this->connector->send(new CreateProductVariantOption($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductVariantOption(
		int $productId,
		int $optionId,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductVariantOption($productId, $optionId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 */
	public function updateProductVariantOption(int $productId, int $optionId): Response
	{
		return $this->connector->send(new UpdateProductVariantOption($productId, $optionId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $optionId The ID of the `Option`.
	 */
	public function deleteProductVariantOption(int $productId, int $optionId): Response
	{
		return $this->connector->send(new DeleteProductVariantOption($productId, $optionId));
	}
}
