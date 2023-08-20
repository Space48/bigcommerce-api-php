<?php

namespace Space48\BigcommerceApi\Requests\TaxRates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-tax-rates
 *
 * Delete one or more tax rates.
 *
 * > #### Note
 * > You must specify which rate(s) to delete using the
 * `id:in` query parameter.
 */
class DeleteTaxRates extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/tax/rates";
	}


	/**
	 * @param array $idIn Filter by tax rate `id`. Use a comma-separated CSV string of IDs for multiple tax rates. For example, `5` or `12,34,56`.
	 */
	public function __construct(
		protected array $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id:in' => $this->idIn];
	}
}
