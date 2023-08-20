<?php

namespace Space48\BigcommerceApi\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * setPriceListRecord
 *
 * Creates or updates a *Price List Record* using the currency code.
 * **Notes**
 * * Supports up to 40
 * simultaneous PUT requests. Running more than the allowed number of requests concurrently on the same
 * store will result in a `429` status error, and your additional requests will fail.
 */
class SetPriceListRecord extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/records/{$this->variantId}/{$this->currencyCode}";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param string $currencyCode The currency code associated with the price record being acted upon.
	 */
	public function __construct(
		protected int $priceListId,
		protected int $variantId,
		protected string $currencyCode,
	) {
	}
}
