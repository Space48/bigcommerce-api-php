<?php

namespace Space48\Bigcommerce\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllCoupons
 *
 * Returns a list of *Coupons*. Default sorting is by coupon/discount id, from lowest to highest.
 * Optional filter parameters can be passed in.
 *
 * ## Usage Notes
 *
 * Available types for `type` and
 * `exclude_type`
 * filters:
 *
 * |Type|
 * |-|
 * |`per_item_discount`|
 * |`percentage_discount`|
 * |`per_total_discount`|
 * |`shipping_discount`|
 * |`free_shipping`|
 * |`promotion`|
 *
 * Coupons
 * with `type=promotion` will not populate usable data for the following fields but instead be set to
 * the following default values:
 *
 * ```json
 * ...
 * amount : 0.0000
 * min_purchase:
 * 0.0000
 * applies_to
 * restricted_to: []
 * shipping_methods : null
 * ...
 * ```
 */
class GetAllCoupons extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/coupons";
	}


	/**
	 * @param string $id Optional filter param. `/api/v2/coupons?id={value}`
	 * @param string $code Optional filter param `/api/v2/coupons?code={value}`
	 * @param string $name Optional filter param `/api/v2/coupons?name={value}`
	 * @param string $type |Type|
	 * |-|
	 * |`per_item_discount`|
	 * |`percentage_discount`|
	 * |`per_total_discount`|
	 * |`shipping_discount`|
	 * |`free_shipping`|
	 * |`promotion`|
	 * @param int $minId Optional filter param `/api/v2/coupons?min_id={value}`
	 * @param int $maxId Optional filter param`/api/v2/coupons?max_id={value}`
	 * @param string $excludeType |Type|
	 * |-|
	 * |`per_item_discount`|
	 * |`percentage_discount`|
	 * |`per_total_discount`|
	 * |`shipping_discount`|
	 * |`free_shipping`|
	 * |`promotion`|
	 */
	public function __construct(
		protected string $id,
		protected string $code,
		protected string $name,
		protected string $type,
		protected int $minId,
		protected int $maxId,
		protected string $excludeType,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'id' => $this->id,
			'code' => $this->code,
			'name' => $this->name,
			'type' => $this->type,
			'min_id' => $this->minId,
			'max_id' => $this->maxId,
			'exclude_type' => $this->excludeType,
		];
	}
}
