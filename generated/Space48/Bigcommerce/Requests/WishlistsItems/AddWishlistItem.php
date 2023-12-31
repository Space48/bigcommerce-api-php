<?php

namespace Space48\Bigcommerce\Requests\WishlistsItems;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * addWishlistItem
 *
 * Adds a wishlist item. More than one item can be added at a time.
 */
class AddWishlistItem extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/wishlists/{$this->wishlistId}/items";
	}


	/**
	 * @param int $wishlistId ID of the Wishlist.
	 */
	public function __construct(
		protected int $wishlistId,
	) {
	}
}
