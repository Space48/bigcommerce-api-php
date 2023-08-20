<?php

namespace Space48\BigcommerceApi\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePriceListRecordsByFilter
 *
 * Deletes a *Price List Record*. Deleting the records does not delete the Price List. Optional
 * parameters can be passed in.
 */
class DeletePriceListRecordsByFilter extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/records";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantIdIn The ID of the `Variant` for which prices were requested.
	 */
	public function __construct(
		protected int $priceListId,
		protected int $variantIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['variant_id:in' => $this->variantIdIn];
	}
}
