<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Items\AddCartLineItem;
use Space48\Bigcommerce\Requests\Items\DeleteCartLineItem;
use Space48\Bigcommerce\Requests\Items\UpdateCartLineItem;
use Space48\Bigcommerce\Resource;

class Items extends Resource
{
	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function addCartLineItem(string $cartId, string $include): Response
	{
		return $this->connector->send(new AddCartLineItem($cartId, $include));
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $itemId
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function updateCartLineItem(string $cartId, string $itemId, string $include): Response
	{
		return $this->connector->send(new UpdateCartLineItem($cartId, $itemId, $include));
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $itemId
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function deleteCartLineItem(string $cartId, string $itemId, string $include): Response
	{
		return $this->connector->send(new DeleteCartLineItem($cartId, $itemId, $include));
	}
}
