<?php

namespace Space48\Bigcommerce\Requests\ComplexRules;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductComplexRule
 *
 * Creates a product *Complex Rule*.
 *
 * **Required Fields**
 * - modifier_id
 * - modifier_value_id
 * -
 * variant_id
 *
 * **Read-Only Fields**
 * - complex_rule_id
 * - conditions_id
 * - rule_id
 * - combination_id
 * - id
 */
class CreateProductComplexRule extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/complex-rules";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
