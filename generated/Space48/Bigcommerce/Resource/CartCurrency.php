<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CartCurrency\AddCartCurrency;
use Space48\Bigcommerce\Resource;

class CartCurrency extends Resource
{
	/**
	 * @param string $cartId This cart's unique ID.
	 */
	public function addCartCurrency(string $cartId): Response
	{
		return $this->connector->send(new AddCartCurrency($cartId));
	}
}
