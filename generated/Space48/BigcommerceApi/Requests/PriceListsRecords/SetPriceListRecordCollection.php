<?php

namespace Space48\BigcommerceApi\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * setPriceListRecordCollection
 *
 * Creates or updates *Price List Records*.
 * **Required Fields**
 * * currency
 * **Notes**
 * * Batch requests
 * support up to 1,000 items per request.
 * * Up to 2 concurrent batch upsert requests are supported with
 * this API. Running more than the allowed concurrent requests in parallel on the **same store** will
 * cause a `429` error, and your additional requests will fail. You are encouraged to run requests
 * sequentially with as many records per request as possible to maximize performance.
 * * When updating a
 * product with variants, or multiple SKUs, don't include records for the parent product SKU.
 */
class SetPriceListRecordCollection extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/records";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 */
	public function __construct(
		protected int $priceListId,
	) {
	}
}
