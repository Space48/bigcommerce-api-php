<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\WishlistsItems\AddWishlistItem;
use Space48\Bigcommerce\Requests\WishlistsItems\DeleteWishlistItem;
use Space48\Bigcommerce\Resource;

class WishlistsItems extends Resource
{
	/**
	 * @param int $wishlistId ID of the Wishlist.
	 * @param int $itemId
	 */
	public function deleteWishlistItem(int $wishlistId, int $itemId): Response
	{
		return $this->connector->send(new DeleteWishlistItem($wishlistId, $itemId));
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function addWishlistItem(int $wishlistId): Response
	{
		return $this->connector->send(new AddWishlistItem($wishlistId));
	}
}
