<?php

namespace Space48\BigcommerceApi\Requests\TaxRates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-tax-rates
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
	 * @param array $idIn Filter by tax rate `id`. Use a comma-separated CSV string of IDs for multiple tax rates. For example, `5` or `12,34,56`.
	 * @param array $taxZoneIdIn Filter by tax zone `id`. Use a comma-separated CSV string of IDs for multiple tax zones. For example, `5` or `12,34,56`.
	 */
	public function __construct(
		protected array $idIn,
		protected array $taxZoneIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id:in' => $this->idIn, 'tax_zone_id:in' => $this->taxZoneIdIn];
	}
}
