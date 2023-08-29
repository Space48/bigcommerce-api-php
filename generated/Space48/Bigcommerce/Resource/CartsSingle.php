<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CartsSingle\CreateAcart;
use Space48\Bigcommerce\Requests\CartsSingle\DeleteAcart;
use Space48\Bigcommerce\Requests\CartsSingle\GetAcart;
use Space48\Bigcommerce\Requests\CartsSingle\UpdateAcart;
use Space48\Bigcommerce\Resource;

class CartsSingle extends Resource
{
	/**
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function createAcart(string $include): Response
	{
		return $this->connector->send(new CreateAcart($include));
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function getAcart(string $cartId, string $include): Response
	{
		return $this->connector->send(new GetAcart($cartId, $include));
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function updateAcart(string $cartId, string $include): Response
	{
		return $this->connector->send(new UpdateAcart($cartId, $include));
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 */
	public function deleteAcart(string $cartId): Response
	{
		return $this->connector->send(new DeleteAcart($cartId));
	}
}
