<?php

namespace Space48\BigcommerceApi\Requests\WishlistsItems;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * WishlistsItemsByIdDelete
 *
 * Deletes a wishlist item.
 */
class WishlistsItemsByIdDelete extends Request
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
