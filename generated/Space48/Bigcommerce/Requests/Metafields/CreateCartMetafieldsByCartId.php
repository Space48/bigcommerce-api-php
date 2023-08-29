<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateCartMetafieldsByCartId
 *
 * Create a cart `Metafield`.
 *
 * If you create an order from a Cart, you can continue referencing the
 * Cart Metafields even if you delete the original Cart. Use the `cart_id` field on the Order to
 * construct the Cart Metafield endpoint.
 */
class CreateCartMetafieldsByCartId extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}/metafields";
	}


	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 */
	public function __construct(
		protected string $cartId,
	) {
	}
}
