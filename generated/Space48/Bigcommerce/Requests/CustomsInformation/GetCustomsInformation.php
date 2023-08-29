<?php

namespace Space48\Bigcommerce\Requests\CustomsInformation;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomsInformation
 *
 * Get customs information for products.
 *
 * This list can be filtered to return customs information
 * objects specific to a list of requested product_ids. This is achieved by appending the query string
 * `?product_id:in=4,5,6` to the resource `/shipping/products/customs-information`.
 *
 * ```http
 * GET
 * /shipping/products/customs-information?product_id:in=4,5,6
 * ```
 */
class GetCustomsInformation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/shipping/products/customs-information";
	}


	/**
	 * @param array $productIdIn A comma-separated list of product IDs. For more information, see [Filtering](/api-docs/getting-started/filtering).
	 */
	public function __construct(
		protected array $productIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['product_id:in' => $this->productIdIn];
	}
}
