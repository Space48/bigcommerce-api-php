<?php

namespace Space48\Bigcommerce\Requests\WishlistsItems;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteWishlistItem
 *
 * Deletes a wishlist item.
 */
class DeleteWishlistItem extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/wishlists/{$this->wishlistId}/items/{$this->itemId}";
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 * @param int $itemId
	 */
	public function __construct(
		protected int $wishlistId,
		protected int $itemId,
	) {
	}
}
