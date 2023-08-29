<?php

namespace Space48\Bigcommerce\Requests\TaxZones;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-tax-zones
 *
 * Retrieve a selection of tax zones when you provide a list of tax zone IDs. Otherwise, retrieve all
 * tax zones defined on the store.
 */
class GetTaxZones extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax/zones";
	}


	/**
	 * @param array $idIn Filter by tax zone `id`. Use a comma-separated CSV string of IDs for multiple tax zones. For example, `5` or `12,34,56`.
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
