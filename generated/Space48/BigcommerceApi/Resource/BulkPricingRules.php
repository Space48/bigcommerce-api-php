<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\BulkPricingRules\CreateBulkPricingRule;
use Space48\BigcommerceApi\Requests\BulkPricingRules\DeleteBulkPricingRuleById;
use Space48\BigcommerceApi\Requests\BulkPricingRules\GetBulkPricingRuleById;
use Space48\BigcommerceApi\Requests\BulkPricingRules\GetBulkPricingRules;
use Space48\BigcommerceApi\Requests\BulkPricingRules\UpdateBulkPricingRule;
use Space48\BigcommerceApi\Resource;

class BulkPricingRules extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getBulkPricingRules(int $productId, string $includeFields, string $excludeFields): Response
	{
		return $this->connector->send(new GetBulkPricingRules($productId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createBulkPricingRule(int $productId): Response
	{
		return $this->connector->send(new CreateBulkPricingRule($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $bulkPricingRuleId The ID of the `BulkPricingRule`.
	 * @param int $bulkPricingRuleId The ID of the `BulkPricingRule`.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getBulkPricingRuleById(
		int $productId,
		int $bulkPricingRuleId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetBulkPricingRuleById($productId, $bulkPricingRuleId, $bulkPricingRuleId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $bulkPricingRuleId The ID of the `BulkPricingRule`.
	 */
	public function updateBulkPricingRule(int $productId, int $bulkPricingRuleId): Response
	{
		return $this->connector->send(new UpdateBulkPricingRule($productId, $bulkPricingRuleId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $bulkPricingRuleId The ID of the `BulkPricingRule`.
	 * @param int $bulkPricingRuleId The ID of the `BulkPricingRule`.
	 */
	public function deleteBulkPricingRuleById(int $productId, int $bulkPricingRuleId): Response
	{
		return $this->connector->send(new DeleteBulkPricingRuleById($productId, $bulkPricingRuleId, $bulkPricingRuleId));
	}
}
