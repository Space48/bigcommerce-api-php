<?php

namespace Space48\Bigcommerce\Requests\ComplexRules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProductComplexRule
 *
 * Updates a *Complex Rule*.
 *
 * **Required Fields**:
 * - none
 *
 * **Read-Only Fields**:
 * - complex_rule_id
 * -
 * conditions_id
 * - rule_id
 * - combination_id
 * - id
 */
class UpdateProductComplexRule extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/complex-rules/{$this->complexRuleId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 */
	public function __construct(
		protected int $productId,
		protected int $complexRuleId,
	) {
	}
}
