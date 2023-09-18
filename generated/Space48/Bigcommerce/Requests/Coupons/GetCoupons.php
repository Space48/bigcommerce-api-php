<?php

namespace Space48\Bigcommerce\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCoupons
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
class GetCoupons extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/coupons";
	}


	/**
	 * @param null|string $id Optional filter param. `/api/v2/coupons?id={value}`
	 * @param null|string $code Optional filter param `/api/v2/coupons?code={value}`
	 * @param null|string $name Optional filter param `/api/v2/coupons?name={value}`
	 * @param null|string $type |Type|
	 * |-|
	 * |`per_item_discount`|
	 * |`percentage_discount`|
	 * |`per_total_discount`|
	 * |`shipping_discount`|
	 * |`free_shipping`|
	 * |`promotion`|
	 * @param null|int $minId Optional filter param `/api/v2/coupons?min_id={value}`
	 * @param null|int $maxId Optional filter param`/api/v2/coupons?max_id={value}`
	 * @param null|string $excludeType |Type|
	 * |-|
	 * |`per_item_discount`|
	 * |`percentage_discount`|
	 * |`per_total_discount`|
	 * |`shipping_discount`|
	 * |`free_shipping`|
	 * |`promotion`|
	 */
	public function __construct(
		protected ?string $id = null,
		protected ?string $code = null,
		protected ?string $name = null,
		protected ?string $type = null,
		protected ?int $minId = null,
		protected ?int $maxId = null,
		protected ?string $excludeType = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'code' => $this->code,
			'name' => $this->name,
			'type' => $this->type,
			'min_id' => $this->minId,
			'max_id' => $this->maxId,
			'exclude_type' => $this->excludeType,
		]);
	}
}
