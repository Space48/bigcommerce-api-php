<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\BulkPricingRules\CreateBulkPricingRule;
use Space48\Bigcommerce\Requests\BulkPricingRules\DeleteBulkPricingRule;
use Space48\Bigcommerce\Requests\BulkPricingRules\GetBulkPricingRule;
use Space48\Bigcommerce\Requests\BulkPricingRules\GetBulkPricingRules;
use Space48\Bigcommerce\Requests\BulkPricingRules\UpdateBulkPricingRule;
use Space48\Bigcommerce\Resource;

class BulkPricingRules extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getBulkPricingRules(int $productId, ?string $includeFields, ?string $excludeFields): Response
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
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getBulkPricingRule(
		int $productId,
		int $bulkPricingRuleId,
		?string $includeFields,
		?string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetBulkPricingRule($productId, $bulkPricingRuleId, $includeFields, $excludeFields));
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
	 */
	public function deleteBulkPricingRule(int $productId, int $bulkPricingRuleId): Response
	{
		return $this->connector->send(new DeleteBulkPricingRule($productId, $bulkPricingRuleId));
	}
}
