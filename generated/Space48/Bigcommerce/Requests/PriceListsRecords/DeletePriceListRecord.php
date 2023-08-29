<?php

namespace Space48\Bigcommerce\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePriceListRecord
 *
 * Deletes a *Price List Record* using the currency code.
 */
class DeletePriceListRecord extends Request
{
	protected Method $method = Method::DELETE;


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
