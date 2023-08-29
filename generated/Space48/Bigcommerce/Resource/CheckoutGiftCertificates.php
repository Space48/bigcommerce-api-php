<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutGiftCertificates\CheckoutsGiftCertificatesByCheckoutIdAndGiftCertificateCodeDelete;
use Space48\Bigcommerce\Requests\CheckoutGiftCertificates\CheckoutsGiftCertificatesByCheckoutIdPost;
use Space48\Bigcommerce\Resource;

class CheckoutGiftCertificates extends Resource
{
	/**
	 * @param string $checkoutId
	 */
	public function checkoutsGiftCertificatesByCheckoutIdPost(string $checkoutId): Response
	{
		return $this->connector->send(new CheckoutsGiftCertificatesByCheckoutIdPost($checkoutId));
	}


	/**
	 * @param string $checkoutId
	 * @param string $giftCertificateCode
	 */
	public function checkoutsGiftCertificatesByCheckoutIdAndGiftCertificateCodeDelete(
		string $checkoutId,
		string $giftCertificateCode,
	): Response
	{
		return $this->connector->send(new CheckoutsGiftCertificatesByCheckoutIdAndGiftCertificateCodeDelete($checkoutId, $giftCertificateCode));
	}
}
