<?php

namespace Space48\Bigcommerce\Requests\Wishlists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateWishlist
 *
 * Updates a wishlist.
 *
 * Use this endpoint to update existing wishlist items, change the wishlist's name
 * and whether the wishlist is available publicly. To add or delete a wishlist item, see [Wishlist
 * Items](/docs/rest-management/wishlists/wishlists-items).
 */
class UpdateWishlist extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/wishlists/{$this->wishlistId}";
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function __construct(
		protected int $wishlistId,
	) {
	}
}
