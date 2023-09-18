<?php

namespace Space48\Bigcommerce\Requests\CheckoutCoupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCheckoutCoupon
 *
 * Deletes a coupon code from a checkout.
 */
class DeleteCheckoutCoupon extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/checkouts/{$this->checkoutId}/coupons/{$this->couponCode}";
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $couponCode The actual coupon code value, not the coupon ID.
	 */
	public function __construct(
		protected string $checkoutId,
		protected string $couponCode,
	) {
	}
}
