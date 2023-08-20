<?php

namespace Space48\BigcommerceApi\Requests\PriceListsAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * upsertPriceListAssignment
 *
 * Upsert a single `Price List Assignment` for a `Price List`.
 */
class UpsertPriceListAssignment extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/assignments";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 */
	public function __construct(
		protected int $priceListId,
	) {
	}
}
