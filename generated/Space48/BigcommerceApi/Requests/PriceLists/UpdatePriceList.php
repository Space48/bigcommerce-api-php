<?php

namespace Space48\BigcommerceApi\Requests\PriceLists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updatePriceList
 *
 * Updates a *Price List*.
 */
class UpdatePriceList extends Request
{
	protected Method $method = Method::PUT;


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
