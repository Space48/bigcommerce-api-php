<?php

namespace Space48\BigcommerceApi\Requests\Wishlists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * WishlistsByIdGet
 *
 * Returns a single wishlist.
 */
class WishlistsByIdGet extends Request
{
	protected Method $method = Method::GET;


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
