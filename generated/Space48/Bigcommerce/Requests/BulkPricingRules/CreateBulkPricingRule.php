<?php

namespace Space48\Bigcommerce\Requests\BulkPricingRules;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBulkPricingRule
 *
 * Creates a *Bulk Pricing Rule*.
 *
 * **Required Fields**
 * - quantity_min
 * - quantity_max
 * - type
 * -
 * amount
 *
 * **Read-Only Fields**
 * - id
 *
 * **Limits**
 * - 50 bulk pricing rule per product limit.
 */
class CreateBulkPricingRule extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/bulk-pricing-rules";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
