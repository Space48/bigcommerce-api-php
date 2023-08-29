<?php

namespace Space48\Bigcommerce\Requests\CustomsInformation;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomsInformation
 *
 * Deletes customs information objects for a product.
 *
 * ## Example
 *
 * This is a batch operation. The
 * `product_id:in` query parameter is required.
 *
 * ```http
 * DELETE
 * /shipping/products/customs-information?product_id:in=4,5,6
 * ```
 */
class DeleteCustomsInformation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/shipping/products/customs-information";
	}


	/**
	 * @param string $productIdIn
	 */
	public function __construct(
		protected string $productIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['product_id:in' => $this->productIdIn];
	}
}
