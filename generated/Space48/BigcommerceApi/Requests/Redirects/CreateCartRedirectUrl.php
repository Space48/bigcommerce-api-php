<?php

namespace Space48\BigcommerceApi\Requests\Redirects;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCartRedirectURL
 *
 * Creates a **Cart** redirect URL for redirecting a shopper to an already created cart using the
 * `cartId`.
 *
 * **Usage Notes**
 *
 * * Redirect URLs can also be created with **Create a Cart** requests by
 * appending `include=redirect_urls`.
 * * A **Carts** redirect URL may only be used once.
 * * Redirect URLs
 * point to either a shared checkout domain or a channel-specific domain, depending on the storefront
 * configuration.
 * * Once a redirect URL has been visited, it will be invalidated and cannot be used
 * again.
 * * If your application requires URLs to be visited more than once, consider generating a
 * fresh one each time you need to restore a cart, and redirecting to the URL from your own
 * application.
 * * Redirect URLs can be generated only from carts that were created using the **REST
 * Management API**.
 * * To restore a cart that was created on the storefront, either by a shopper or a
 * Storefront API, first recreate the cart using the **REST Management API**.
 */
class CreateCartRedirectUrl extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/redirect_urls";
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 */
	public function __construct(
		protected string $cartId,
	) {
	}
}
