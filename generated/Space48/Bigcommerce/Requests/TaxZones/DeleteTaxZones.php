<?php

namespace Space48\Bigcommerce\Requests\TaxZones;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteTaxZones
 *
 * Delete one or more tax zones. Deleting a tax zone removes all associated tax rates.
 *
 * > #### Note
 * >
 * You must specify which zone(s) to delete using the `id:in` query parameter.
 */
class DeleteTaxZones extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/tax/zones";
	}


	/**
	 * @param null|array $idIn Filter by tax zone `id`. Use a comma-separated CSV string of IDs for multiple tax zones. For example, `5` or `12,34,56`.
	 */
	public function __construct(
		protected ?array $idIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn]);
	}
}
