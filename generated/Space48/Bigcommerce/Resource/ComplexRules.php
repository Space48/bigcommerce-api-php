<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ComplexRules\CreateProductComplexRule;
use Space48\Bigcommerce\Requests\ComplexRules\DeleteProductComplexRule;
use Space48\Bigcommerce\Requests\ComplexRules\GetProductComplexRule;
use Space48\Bigcommerce\Requests\ComplexRules\GetProductComplexRules;
use Space48\Bigcommerce\Requests\ComplexRules\UpdateProductComplexRule;
use Space48\Bigcommerce\Resource;

class ComplexRules extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductComplexRules(int $productId, ?string $includeFields, ?string $excludeFields): Response
	{
		return $this->connector->send(new GetProductComplexRules($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createProductComplexRule(int $productId): Response
	{
		return $this->connector->send(new CreateProductComplexRule($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductComplexRule(
		int $productId,
		int $complexRuleId,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductComplexRule($productId, $complexRuleId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 */
	public function updateProductComplexRule(int $productId, int $complexRuleId): Response
	{
		return $this->connector->send(new UpdateProductComplexRule($productId, $complexRuleId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 */
	public function deleteProductComplexRule(int $productId, int $complexRuleId): Response
	{
		return $this->connector->send(new DeleteProductComplexRule($productId, $complexRuleId));
	}
}
