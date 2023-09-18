<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ProductVariants\CreateProductVariant;
use Space48\Bigcommerce\Requests\ProductVariants\DeleteProductVariant;
use Space48\Bigcommerce\Requests\ProductVariants\GetProductVariant;
use Space48\Bigcommerce\Requests\ProductVariants\GetProductVariants;
use Space48\Bigcommerce\Requests\ProductVariants\UpdateProductVariant;
use Space48\Bigcommerce\Resource;

class ProductVariants extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductVariants(int $productId, ?string $includeFields, ?string $excludeFields): Response
	{
		return $this->connector->send(new GetProductVariants($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createProductVariant(int $productId): Response
	{
		return $this->connector->send(new CreateProductVariant($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductVariant(
		int $productId,
		int $variantId,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductVariant($productId, $variantId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function updateProductVariant(int $productId, int $variantId): Response
	{
		return $this->connector->send(new UpdateProductVariant($productId, $variantId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function deleteProductVariant(int $productId, int $variantId): Response
	{
		return $this->connector->send(new DeleteProductVariant($productId, $variantId));
	}
}
