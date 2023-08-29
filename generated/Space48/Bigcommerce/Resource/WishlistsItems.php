<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\WishlistsItems\WishlistsItemsByIdDelete;
use Space48\Bigcommerce\Requests\WishlistsItems\WishlistsItemsByIdPost;
use Space48\Bigcommerce\Resource;

class WishlistsItems extends Resource
{
	/**
	 * @param int $wishlistId ID of the Wishlist.
	 * @param int $itemId
	 */
	public function wishlistsItemsByIdDelete(int $wishlistId, int $itemId): Response
	{
		return $this->connector->send(new WishlistsItemsByIdDelete($wishlistId, $itemId));
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function wishlistsItemsByIdPost(int $wishlistId): Response
	{
		return $this->connector->send(new WishlistsItemsByIdPost($wishlistId));
	}
}
