<?php

namespace Space48\Bigcommerce\Requests\Wishlists;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createWishlist
 *
 * Creates a wishlist and wishlist item. More than one item can be added in the POST.
 *
 * **Required
 * Fields**
 * * name
 * * customer_id
 */
class CreateWishlist extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/wishlists";
	}


	public function __construct()
	{
	}
}
