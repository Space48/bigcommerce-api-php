<?php

namespace Space48\Bigcommerce\Requests\TaxProperties;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-tax-properties
 *
 * Retrieve all tax properties defined in this store.
 */
class GetTaxProperties extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax/properties";
	}


	/**
	 * @param string $idIn ID of tax property. To target multiple tax properties, provide a comma-separated list of IDs such as `12,34,56`
	 */
	public function __construct(
		protected string $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id:in' => $this->idIn];
	}
}
