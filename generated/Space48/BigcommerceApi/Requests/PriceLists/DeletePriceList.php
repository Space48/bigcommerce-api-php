<?php

namespace Space48\BigcommerceApi\Requests\PriceLists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePriceList
 *
 * Deletes a *Price List*. All associated price records are also removed.
 * **Limits**
 * * Limit of 1
 * concurrent request.
 */
class DeletePriceList extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 */
	public function __construct(
		protected int $priceListId,
	) {
	}
}
