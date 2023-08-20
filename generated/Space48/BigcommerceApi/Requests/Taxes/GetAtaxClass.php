<?php

namespace Space48\BigcommerceApi\Requests\Taxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getATaxClass
 *
 * Returns a single *Tax Class*.
 */
class GetAtaxClass extends Request
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
