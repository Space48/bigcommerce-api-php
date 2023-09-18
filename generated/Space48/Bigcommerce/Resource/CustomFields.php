<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomFields\CreateProductCustomField;
use Space48\Bigcommerce\Requests\CustomFields\DeleteProductCustomField;
use Space48\Bigcommerce\Requests\CustomFields\GetProductCustomField;
use Space48\Bigcommerce\Requests\CustomFields\GetProductCustomFields;
use Space48\Bigcommerce\Requests\CustomFields\UpdateProductCustomField;
use Space48\Bigcommerce\Resource;

class CustomFields extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductCustomFields(int $productId, ?string $includeFields, ?string $excludeFields): Response
	{
		return $this->connector->send(new GetProductCustomFields($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createProductCustomField(int $productId): Response
	{
		return $this->connector->send(new CreateProductCustomField($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductCustomField(
		int $productId,
		int $customFieldId,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductCustomField($productId, $customFieldId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 */
	public function updateProductCustomField(int $productId, int $customFieldId): Response
	{
		return $this->connector->send(new UpdateProductCustomField($productId, $customFieldId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 */
	public function deleteProductCustomField(int $productId, int $customFieldId): Response
	{
		return $this->connector->send(new DeleteProductCustomField($productId, $customFieldId));
	}
}
