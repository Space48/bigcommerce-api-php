<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CartsSingle\CreateCart;
use Space48\Bigcommerce\Requests\CartsSingle\DeleteCart;
use Space48\Bigcommerce\Requests\CartsSingle\GetCart;
use Space48\Bigcommerce\Requests\CartsSingle\UpdateCart;
use Space48\Bigcommerce\Resource;

class CartsSingle extends Resource
{
	/**
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function createCart(?string $include): Response
	{
		return $this->connector->send(new CreateCart($include));
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function getCart(string $cartId, ?string $include): Response
	{
		return $this->connector->send(new GetCart($cartId, $include));
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function updateCart(string $cartId, ?string $include): Response
	{
		return $this->connector->send(new UpdateCart($cartId, $include));
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 */
	public function deleteCart(string $cartId): Response
	{
		return $this->connector->send(new DeleteCart($cartId));
	}
}
