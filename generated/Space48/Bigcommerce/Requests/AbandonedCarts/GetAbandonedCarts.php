<?php

namespace Space48\Bigcommerce\Requests\AbandonedCarts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAbandonedCarts
 *
 * Returns the `cart_id` corresponding to the abandoned cart `{token}` passed in.
 *
 * **Usage Notes**:
 * *
 * `{token}` is the token in the query string of the abandoned cart link found in abandoned cart email
 * notifications to shoppers
 */
class GetAbandonedCarts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/abandoned-carts/{$this->token}";
	}


	/**
	 * @param string $token Unique cart `UUID`.
	 *
	 * Unique cart `UUID` token that is generated for abandoned cart emails.
	 */
	public function __construct(
		protected string $token,
	) {
	}
}
