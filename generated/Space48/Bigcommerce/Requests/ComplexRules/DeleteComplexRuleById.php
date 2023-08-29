<?php

namespace Space48\Bigcommerce\Requests\ComplexRules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteComplexRuleById
 *
 * Deletes a product *Complex Rule*.
 */
class DeleteComplexRuleById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/complex-rules/{$this->complexRuleId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 * @param int $complexRuleId The ID of the `ComplexRule`.
	 */
	public function __construct(
		protected int $productId,
		protected int $complexRuleId,
	) {
	}
}
