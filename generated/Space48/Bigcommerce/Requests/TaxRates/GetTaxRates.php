<?php

namespace Space48\Bigcommerce\Requests\TaxRates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getTaxRates
 *
 * Retrieve a list of tax rates.
 */
class GetTaxRates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax/rates";
	}


	/**
	 * @param null|array $idIn Filter by tax rate `id`. Use a comma-separated CSV string of IDs for multiple tax rates. For example, `5` or `12,34,56`.
	 * @param null|array $taxZoneIdIn Filter by tax zone `id`. Use a comma-separated CSV string of IDs for multiple tax zones. For example, `5` or `12,34,56`.
	 */
	public function __construct(
		protected ?array $idIn = null,
		protected ?array $taxZoneIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn, 'tax_zone_id:in' => $this->taxZoneIdIn]);
	}
}
