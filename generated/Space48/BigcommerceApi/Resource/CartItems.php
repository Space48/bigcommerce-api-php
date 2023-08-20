<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CartItems\AddCartLineItem;
use Space48\BigcommerceApi\Requests\CartItems\DeleteCartLineItem;
use Space48\BigcommerceApi\Requests\CartItems\UpdateCartLineItem;
use Space48\BigcommerceApi\Resource;

class CartItems extends Resource
{
	/**
	 * @param string $cartId This cart's unique ID.
	 * @param string $include To return product options add one of the following include:
	 *
	 * `lineItems.physicalItems.options`: The Cart returns an abbreviated result. Use this to return physical items product options. Can also be used in a /POST to have the extended Cart object return.
	 *
	 * `lineItems.digitalItems.options`:  The Cart returns an abbreviated result. Use this to return digital items product options.  Can also be used in a /POST to have the extended Cart object return.
	 *
	 * `lineItems.digitalItems.options,lineItems.physicalItems.options`:  The Cart returns an abbreviated result. Use this to return digital and physical options. Can also be used in a /POST to have the extended Cart object return.
	 */
	public function addCartLineItem(string $cartId, string $include): Response
	{
		return $this->connector->send(new AddCartLineItem($cartId, $include));
	}


	/**
	 * @param string $cartId This cart's unique ID.
	 * @param string $itemId This item's ID.
	 * @param string $include To return product options add one of the following include:
	 *
	 * `lineItems.physicalItems.options`: The Cart returns an abbreviated result. Use this to return physical items product options. Can also be used in a /POST to have the extended Cart object return.
	 *
	 * `lineItems.digitalItems.options`:  The Cart returns an abbreviated result. Use this to return digital items product options.  Can also be used in a /POST to have the extended Cart object return.
	 *
	 * `lineItems.digitalItems.options,lineItems.physicalItems.options`:  The Cart returns an abbreviated result. Use this to return digital and physical options. Can also be used in a /POST to have the extended Cart object return.
	 */
	public function updateCartLineItem(string $cartId, string $itemId, string $include): Response
	{
		return $this->connector->send(new UpdateCartLineItem($cartId, $itemId, $include));
	}


	/**
	 * @param string $cartId This cart's unique ID.
	 * @param string $itemId The ID of the item to delete.
	 * @param string $include To return product options add one of the following include:
	 *
	 * `lineItems.physicalItems.options`: The Cart returns an abbreviated result. Use this to return physical items product options. Can also be used in a /POST to have the extended Cart object return.
	 *
	 * `lineItems.digitalItems.options`:  The Cart returns an abbreviated result. Use this to return digital items product options.  Can also be used in a /POST to have the extended Cart object return.
	 *
	 * `lineItems.digitalItems.options,lineItems.physicalItems.options`:  The Cart returns an abbreviated result. Use this to return digital and physical options. Can also be used in a /POST to have the extended Cart object return.
	 */
	public function deleteCartLineItem(string $cartId, string $itemId, string $include): Response
	{
		return $this->connector->send(new DeleteCartLineItem($cartId, $itemId, $include));
	}
}
