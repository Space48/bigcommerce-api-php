<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CartCurrency\AddCartCurrency;
use Space48\BigcommerceApi\Resource;

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
