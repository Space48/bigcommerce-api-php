<?php

namespace Space48\BigcommerceApi\Requests\CheckoutGiftCertificates;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CheckoutsGiftCertificatesByCheckoutIdPost
 *
 * Adds a *Gift Certificate Code* to *Checkout*.
 *
 * > #### Note
 * > * *Gift Certificates* are treated as a
 * payment methods.
 * > * You are not able to purchase a gift certificate with a gift certificate.
 * > *
 * The rate limit is 20/hour (only for unique gift-certificate codes).
 * > * Substitute your storefront
 * domain for `yourstore.example.com`.
 * > * The Send a Test Request feature is not currently supported
 * for this endpoint.
 */
class CheckoutsGiftCertificatesByCheckoutIdPost extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/gift-certificates";
	}


	/**
	 * @param string $checkoutId
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
