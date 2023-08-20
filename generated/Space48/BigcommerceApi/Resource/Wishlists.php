<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Wishlists\WishlistsByIdDelete;
use Space48\BigcommerceApi\Requests\Wishlists\WishlistsByIdGet;
use Space48\BigcommerceApi\Requests\Wishlists\WishlistsByIdPut;
use Space48\BigcommerceApi\Requests\Wishlists\WishlistsGet;
use Space48\BigcommerceApi\Requests\Wishlists\WishlistsPost;
use Space48\BigcommerceApi\Resource;

class Wishlists extends Resource
{
	/**
	 * @param int $customerId All wishlists relating to the customer.
	 */
	public function wishlistsGet(int $customerId): Response
	{
		return $this->connector->send(new WishlistsGet($customerId));
	}


	public function wishlistsPost(): Response
	{
		return $this->connector->send(new WishlistsPost());
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function wishlistsByIdGet(int $wishlistId): Response
	{
		return $this->connector->send(new WishlistsByIdGet($wishlistId));
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function wishlistsByIdPut(int $wishlistId): Response
	{
		return $this->connector->send(new WishlistsByIdPut($wishlistId));
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function wishlistsByIdDelete(int $wishlistId): Response
	{
		return $this->connector->send(new WishlistsByIdDelete($wishlistId));
	}
}
