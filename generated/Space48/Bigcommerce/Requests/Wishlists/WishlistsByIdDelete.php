<?php

namespace Space48\Bigcommerce\Requests\Wishlists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * WishlistsByIdDelete
 *
 * Deletes a wishlist.
 */
class WishlistsByIdDelete extends Request
{
	protected Method $method = Method::DELETE;


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
