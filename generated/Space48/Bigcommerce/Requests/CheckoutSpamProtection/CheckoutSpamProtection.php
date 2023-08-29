<?php

namespace Space48\Bigcommerce\Requests\CheckoutSpamProtection;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * checkoutSpamProtection
 *
 * Verifies if checkout is created by human.
 *
 * > #### Note
 * > * Substitute your storefront domain for
 * `yourstore.example.com`.
 * > * The Send a Test Request feature is not currently supported for this
 * endpoint.
 */
class CheckoutSpamProtection extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/spam-protection";
	}


	/**
	 * @param string $checkoutId
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
