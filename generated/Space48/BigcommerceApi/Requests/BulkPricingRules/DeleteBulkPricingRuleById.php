<?php

namespace Space48\BigcommerceApi\Requests\BulkPricingRules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteBulkPricingRuleById
 *
 * Deletes a *Bulk Pricing Rule*.
 */
class DeleteBulkPricingRuleById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/bulk-pricing-rules/{$this->bulkPricingRuleId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $bulkPricingRuleId The ID of the `BulkPricingRule`.
	 * @param int $bulkPricingRuleId The ID of the `BulkPricingRule`.
	 */
	public function __construct(
		protected int $productId,
		protected int $bulkPricingRuleId,
	) {
	}
}
