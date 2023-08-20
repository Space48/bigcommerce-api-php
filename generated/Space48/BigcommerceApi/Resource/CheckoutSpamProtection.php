<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutSpamProtection\CheckoutSpamProtection as CheckoutSpamProtectionRequest;
use Space48\BigcommerceApi\Resource;

class CheckoutSpamProtection extends Resource
{
	/**
	 * @param string $checkoutId
	 */
	public function checkoutSpamProtection(string $checkoutId): Response
	{
		return $this->connector->send(new CheckoutSpamProtectionRequest($checkoutId));
	}
}
