<?php

namespace Space48\Bigcommerce\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePriceListRecords
 *
 * Deletes a *Price List Record*. Deleting the records does not delete the Price List. Optional
 * parameters can be passed in.
 */
class DeletePriceListRecords extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/records";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param null|int $variantIdIn The ID of the `Variant` for which prices were requested.
	 */
	public function __construct(
		protected int $priceListId,
		protected ?int $variantIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['variant_id:in' => $this->variantIdIn]);
	}
}
