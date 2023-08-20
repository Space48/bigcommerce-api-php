<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutCoupons\CheckoutsCouponsByCheckoutIdAndCouponCodeDelete;
use Space48\BigcommerceApi\Requests\CheckoutCoupons\CheckoutsCouponsByCheckoutIdPost;
use Space48\BigcommerceApi\Resource;

class CheckoutCoupons extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 */
	public function checkoutsCouponsByCheckoutIdPost(string $checkoutId): Response
	{
		return $this->connector->send(new CheckoutsCouponsByCheckoutIdPost($checkoutId));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $couponCode The actual coupon code value, not the coupon ID.
	 */
	public function checkoutsCouponsByCheckoutIdAndCouponCodeDelete(string $checkoutId, string $couponCode): Response
	{
		return $this->connector->send(new CheckoutsCouponsByCheckoutIdAndCouponCodeDelete($checkoutId, $couponCode));
	}
}
