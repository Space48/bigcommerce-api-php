<?php

namespace Space48\BigcommerceApi\Requests\Countries;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a Country
 *
 * Returns a single *Country*.  Gets a country. A country or territory, identifiable by an ISO 3166
 * country code.
 */
class GetCountry extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries/{$this->id}";
	}


	/**
	 * @param string $id
	 */
	public function __construct(
		protected string $id,
	) {
	}
}
