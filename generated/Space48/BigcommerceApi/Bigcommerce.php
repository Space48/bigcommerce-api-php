<?php

namespace Space48\BigcommerceApi;

use Saloon\Http\Connector;
use Space48\BigcommerceApi\Resource\Wishlists;
use Space48\BigcommerceApi\Resource\WishlistsItems;

/**
 * Wishlist
 *
 * Create and manage customer [wishlists](https://support.bigcommerce.com/s/article/Wishlists).
 *
 * ## Additional Information
 * * [Wishlists](https://support.bigcommerce.com/s/article/Wishlists)
 */
class Bigcommerce extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'https://api.bigcommerce.com/stores/{store_hash}/v3';
	}


	public function wishlists(): Wishlists
	{
		return new Wishlists($this);
	}


	public function wishlistsItems(): WishlistsItems
	{
		return new WishlistsItems($this);
	}
}
