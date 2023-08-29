<?php

namespace Space48\Bigcommerce\Requests\CheckoutDiscounts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-store_hash-v3-checkouts-checkoutId-discounts
 *
 * Adds a discount to an existing *checkout*.
 *
 * This discount only applies to `line_items`. When you
 * call this API, you clear out all existing discounts applied to line items, including product and
 * order-based discounts.
 *
 * This endpoint splits the discount between line items based on the item
 * value.
 *
 * Required Fields
 * * discounted_amount
 */
class PostStoreHashV3CheckoutsCheckoutIdDiscounts extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/discounts";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
