<?php

namespace Space48\Bigcommerce\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCoupon
 *
 * Updates a *Coupon*.
 *
 *
 * **Read Only Fields**
 *
 * * `id`
 * * `num_uses`
 * * `date_created`
 *
 * **Notes**
 *
 * If the
 * `applies_to` value is cleared, you can restore it to the coupon by reapplying the `applies_to` value
 * in a new `PUT` request.
 */
class UpdateCoupon extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/coupons/{$this->id}";
	}


	/**
	 * @param float|int $id ID of the coupon.
	 */
	public function __construct(
		protected float|int $id,
	) {
	}
}
