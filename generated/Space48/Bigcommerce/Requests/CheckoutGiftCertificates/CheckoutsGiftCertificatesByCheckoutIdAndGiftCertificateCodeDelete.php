<?php

namespace Space48\Bigcommerce\Requests\CheckoutGiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CheckoutsGiftCertificatesByCheckoutIdAndGiftCertificateCodeDelete
 *
 * Deletes an existing *Gift Certificate*.
 *
 * This removes the *Gift Certificate* payment method.
 *
 * > ####
 * Note
 * > * Substitute your storefront domain for `yourstore.example.com`.
 * > * The Send a Test Request
 * feature is not currently supported for this endpoint.
 */
class CheckoutsGiftCertificatesByCheckoutIdAndGiftCertificateCodeDelete extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/gift-certificates/{$this->giftCertificateCode}";
	}


	/**
	 * @param string $checkoutId
	 * @param string $giftCertificateCode
	 */
	public function __construct(
		protected string $checkoutId,
		protected string $giftCertificateCode,
	) {
	}
}
