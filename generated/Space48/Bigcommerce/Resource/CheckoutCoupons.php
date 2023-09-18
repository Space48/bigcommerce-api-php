<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutCoupons\AddCheckoutCoupon;
use Space48\Bigcommerce\Requests\CheckoutCoupons\DeleteCheckoutCoupon;
use Space48\Bigcommerce\Resource;

class CheckoutCoupons extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function addCheckoutCoupon(string $checkoutId): Response
	{
		return $this->connector->send(new AddCheckoutCoupon($checkoutId));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $couponCode The actual coupon code value, not the coupon ID.
	 */
	public function deleteCheckoutCoupon(string $checkoutId, string $couponCode): Response
	{
		return $this->connector->send(new DeleteCheckoutCoupon($checkoutId, $couponCode));
	}
}
