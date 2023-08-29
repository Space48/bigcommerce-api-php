<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomFields\CreateCustomField;
use Space48\Bigcommerce\Requests\CustomFields\DeleteCustomFieldById;
use Space48\Bigcommerce\Requests\CustomFields\GetCustomFieldById;
use Space48\Bigcommerce\Requests\CustomFields\GetCustomFields;
use Space48\Bigcommerce\Requests\CustomFields\UpdateCustomField;
use Space48\Bigcommerce\Resource;

class CustomFields extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getCustomFields(int $productId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetCustomFields($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createCustomField(int $productId): Response
	{
		return $this->connector->send(new CreateCustomField($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 * @param int $customFieldId The ID of the `CustomField`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getCustomFieldById(
		int $productId,
		int $customFieldId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetCustomFieldById($productId, $customFieldId, $customFieldId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 */
	public function updateCustomField(int $productId, int $customFieldId): Response
	{
		return $this->connector->send(new UpdateCustomField($productId, $customFieldId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $customFieldId The ID of the `CustomField`.
	 * @param int $customFieldId The ID of the `CustomField`.
	 */
	public function deleteCustomFieldById(int $productId, int $customFieldId): Response
	{
		return $this->connector->send(new DeleteCustomFieldById($productId, $customFieldId, $customFieldId));
	}
}
