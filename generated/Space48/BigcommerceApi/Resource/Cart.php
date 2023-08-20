<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Cart\CreateAcart;
use Space48\BigcommerceApi\Requests\Cart\DeleteAcart;
use Space48\BigcommerceApi\Requests\Cart\GetAcart;
use Space48\BigcommerceApi\Resource;

class Cart extends Resource
{
	/**
	 * @param string $include Include product options in specified line item types.
	 */
	public function getAcart(string $include): Response
	{
		return $this->connector->send(new GetAcart($include));
	}


	/**
	 * @param string $include Include product options in specified line item types.
	 */
	public function createAcart(string $include): Response
	{
		return $this->connector->send(new CreateAcart($include));
	}


	/**
	 * @param string $cartId This cart's unique ID.
	 */
	public function deleteAcart(string $cartId): Response
	{
		return $this->connector->send(new DeleteAcart($cartId));
	}
}
