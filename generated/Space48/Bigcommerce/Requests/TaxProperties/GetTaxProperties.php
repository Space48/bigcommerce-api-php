<?php

namespace Space48\Bigcommerce\Requests\TaxProperties;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getTaxProperties
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
	 * @param null|string $idIn ID of tax property. To target multiple tax properties, provide a comma-separated list of IDs such as `12,34,56`
	 */
	public function __construct(
		protected ?string $idIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn]);
	}
}
