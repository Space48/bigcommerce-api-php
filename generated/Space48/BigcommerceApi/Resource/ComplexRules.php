<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ComplexRules\CreateComplexRule;
use Space48\BigcommerceApi\Requests\ComplexRules\DeleteComplexRuleById;
use Space48\BigcommerceApi\Requests\ComplexRules\GetComplexRuleById;
use Space48\BigcommerceApi\Requests\ComplexRules\GetComplexRules;
use Space48\BigcommerceApi\Requests\ComplexRules\UpdateComplexRule;
use Space48\BigcommerceApi\Resource;

class ComplexRules extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getComplexRules(int $productId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetComplexRules($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createComplexRule(int $productId): Response
	{
		return $this->connector->send(new CreateComplexRule($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getComplexRuleById(
		int $productId,
		int $complexRuleId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetComplexRuleById($productId, $complexRuleId, $complexRuleId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 */
	public function updateComplexRule(int $productId, int $complexRuleId): Response
	{
		return $this->connector->send(new UpdateComplexRule($productId, $complexRuleId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 */
	public function deleteComplexRuleById(int $productId, int $complexRuleId): Response
	{
		return $this->connector->send(new DeleteComplexRuleById($productId, $complexRuleId, $complexRuleId));
	}
}
