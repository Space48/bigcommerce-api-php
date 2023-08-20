<?php

namespace Space48\BigcommerceApi\Requests\CheckoutStoreCredit;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CheckoutStoreCreditAdd
 *
 * Applies any available store credit to a checkout. As on the storefront, all available store credit
 * will be used (up to the value of the order) and no amount need be specified.
 *
 * > #### Note
 * > *
 * Substitute your storefront domain for `yourstore.example.com`.
 * > * The Send a Test Request feature
 * is not currently supported for this endpoint.
 */
class CheckoutStoreCreditAdd extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
