<?php

namespace Space48\BigcommerceApi\Requests\CheckoutStoreCredit;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CheckoutsStoreCreditRemove
 *
 * Removes store credit from a checkout.
 *
 * > #### Note
 * > * Substitute your storefront domain for
 * `yourstore.example.com`.
 * > * The Send a Test Request feature is not currently supported for this
 * endpoint.
 */
class CheckoutsStoreCreditRemove extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/store-credit";
	}


	/**
	 * @param string $checkoutId
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
