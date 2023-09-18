<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Wishlists\CreateWishlist;
use Space48\Bigcommerce\Requests\Wishlists\DeleteWishlist;
use Space48\Bigcommerce\Requests\Wishlists\GetWishlist;
use Space48\Bigcommerce\Requests\Wishlists\GetWishlists;
use Space48\Bigcommerce\Requests\Wishlists\UpdateWishlist;
use Space48\Bigcommerce\Resource;

class Wishlists extends Resource
{
	/**
	 * @param int $customerId All wishlists relating to the customer.
	 */
	public function getWishlists(?int $customerId): Response
	{
		return $this->connector->send(new GetWishlists($customerId));
	}


	public function createWishlist(): Response
	{
		return $this->connector->send(new CreateWishlist());
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function getWishlist(int $wishlistId): Response
	{
		return $this->connector->send(new GetWishlist($wishlistId));
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function updateWishlist(int $wishlistId): Response
	{
		return $this->connector->send(new UpdateWishlist($wishlistId));
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function deleteWishlist(int $wishlistId): Response
	{
		return $this->connector->send(new DeleteWishlist($wishlistId));
	}
}
