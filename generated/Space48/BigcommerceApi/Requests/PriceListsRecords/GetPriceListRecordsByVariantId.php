<?php

namespace Space48\BigcommerceApi\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPriceListRecordsByVariantId
 *
 * Returns *Price List Records* using the variant ID. Will also contain currency records.
 *
 * **Notes**
 * *
 * Supports up to 40 simultaneous GET requests. Running more than the allowed number of requests
 * concurrently on the same store will result in a `429` status error, and your additional requests
 * will fail.
 * * Store Pricelist Records data to reduce the number of calls and maximize performance.
 */
class GetPriceListRecordsByVariantId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/records/{$this->variantId}";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function __construct(
		protected int $priceListId,
		protected int $variantId,
	) {
	}
}
