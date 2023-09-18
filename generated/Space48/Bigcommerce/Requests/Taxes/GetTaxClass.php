<?php

namespace Space48\Bigcommerce\Requests\Taxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getTaxClass
 *
 * Returns a single *Tax Class*.
 */
class GetTaxClass extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax_classes/{$this->id}";
	}


	/**
	 * @param int $id ID of the tax class.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
