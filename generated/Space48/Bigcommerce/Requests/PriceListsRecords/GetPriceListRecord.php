<?php

namespace Space48\Bigcommerce\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPriceListRecord
 *
 * Returns a *Price List Record* using the currency code. You can use optional parameters.
 * **Notes**
 * *
 * Supports up to 40 simultaneous GET requests. Running more than the allowed number of requests
 * concurrently on the same store will result in a `429` status error, and your additional requests
 * will fail.
 */
class GetPriceListRecord extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pricelists/{$this->priceListId}/records/{$this->variantId}/{$this->currencyCode}";
	}


	/**
	 * @param int $priceListId The ID of the `Price List` requested.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 * @param string $currencyCode The currency code associated with the price record being acted upon.
	 * @param null|string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include `bulk_pricing_tiers` and `sku`. Other values will be ignored.
	 * Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include `bulk_pricing_tiers` and `sku`. Other values will be ignored.
	 */
	public function __construct(
		protected int $priceListId,
		protected int $variantId,
		protected string $currencyCode,
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
