<?php

namespace Space48\Bigcommerce\Requests\BulkPricingRules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateBulkPricingRule
 *
 * Updates a *Bulk Pricing Rule*.
 *
 * **Required Fields**
 * * none
 *
 * **Read-Only Fields**
 * - id
 */
class UpdateBulkPricingRule extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/bulk-pricing-rules/{$this->bulkPricingRuleId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $bulkPricingRuleId The ID of the `BulkPricingRule`.
	 */
	public function __construct(
		protected int $productId,
		protected int $bulkPricingRuleId,
	) {
	}
}
