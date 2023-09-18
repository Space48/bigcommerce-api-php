<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Redirects\CreateCartRedirectUrl;
use Space48\Bigcommerce\Resource;

class Redirects extends Resource
{
	/**
	 * @param string $cartId The identifier of a specific cart.
	 */
	public function createCartRedirectUrl(string $cartId): Response
	{
		return $this->connector->send(new CreateCartRedirectUrl($cartId));
	}
}
