<?php

namespace Space48\Bigcommerce\Requests\CheckoutCoupons;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * addCheckoutCoupon
 *
 * Adds a coupon code to a checkout.
 *
 * **Required Fields**
 * * coupon_code
 *
 * **Limits**
 * * Coupon codes have
 * a 50-character limit.
 */
class AddCheckoutCoupon extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/coupons";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function __construct(
		protected string $checkoutId,
	) {
	}
}
