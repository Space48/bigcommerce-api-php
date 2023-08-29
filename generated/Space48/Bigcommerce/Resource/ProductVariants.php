<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ProductVariants\CreateVariant;
use Space48\Bigcommerce\Requests\ProductVariants\DeleteVariantById;
use Space48\Bigcommerce\Requests\ProductVariants\GetVariantById;
use Space48\Bigcommerce\Requests\ProductVariants\GetVariantsByProductId;
use Space48\Bigcommerce\Requests\ProductVariants\UpdateVariant;
use Space48\Bigcommerce\Resource;

class ProductVariants extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getVariantsByProductId(int $productId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetVariantsByProductId($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createVariant(int $productId): Response
	{
		return $this->connector->send(new CreateVariant($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getVariantById(
		int $productId,
		int $variantId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetVariantById($productId, $variantId, $variantId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function updateVariant(int $productId, int $variantId): Response
	{
		return $this->connector->send(new UpdateVariant($productId, $variantId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function deleteVariantById(int $productId, int $variantId): Response
	{
		return $this->connector->send(new DeleteVariantById($productId, $variantId, $variantId));
	}
}
