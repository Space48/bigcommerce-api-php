<?php

namespace Space48\Bigcommerce\Requests\Coupons;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCoupon
 *
 * Creates a *Coupon*.
 *
 * **Required Fields**
 * *   `name`
 * *   `code`
 * *   `type`
 * *   `amount`
 * *
 * `applies_to`
 *
 * **Read Only Fields**
 * *   `id`
 * *   `num_uses`
 *
 * **Notes**
 *
 * The coupon type can be one of
 * the following:
 *
 * *   `per_item_discount`
 * *   `per_total_discount`
 * *   `shipping_discount`
 * *
 * `free_shipping`
 * *   `percentage_discount`
 *
 * Legacy coupon codes only work with the store's default
 * currency. Applying a coupon with any other currency other than the store's default will result in
 * the error: "Coupons only apply to default currency."
 */
class CreateCoupon extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/coupons";
	}


	public function __construct()
	{
	}
}
