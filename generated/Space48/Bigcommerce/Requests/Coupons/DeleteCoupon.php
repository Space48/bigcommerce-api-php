<?php

namespace Space48\Bigcommerce\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCoupon
 *
 * Deletes a *Coupon*.
 */
class DeleteCoupon extends Request
{
	protected Method $method = Method::DELETE;


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
