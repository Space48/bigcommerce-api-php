<?php

namespace Space48\BigcommerceApi\Requests\ShippingMethod;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAShippingMethod
 *
 * Returns a single *Shipping Method* in a zone. Real Time Carrier Connections are also supported by
 * this endpoint.
 *
 * ### Settings Objects
 *
 * A shipping methodʼs `type` and `settings` properties can
 * match one of the following models:
 *
 * ### perorder Object – Properties
 *
 * Object model for flat-rate
 * shipping quotes per order.
 *
 * | Name | Type | Description |
 * | - | - | - |
 * | rate | number | Flat rate
 * per order. |
 *
 * #### JSON Example
 *
 * ```json
 * {
 *     "name": "Flat Rate per Order",
 *     "type":
 * "perorder",
 *     "settings": {
 *         "rate": 7
 * },
 * ```
 *
 * ### peritem Object – Properties
 *
 * Object
 * model for flat-rate shipping quotes per item ordered.
 *
 * | Name | Type | Description |
 * | - | - | - |
 * |
 * rate | number | Flat rate per item. |
 *
 * #### JSON Example
 *
 * ```json
 * {
 *     "name": "Flat Rate per
 * Item",
 *     "type": "peritem",
 *     "settings": {
 *         "rate": 8
 * },
 * ```
 *
 * ### weight Object –
 * Properties
 *
 * Object model for shipping quotes by weight.
 *
 * | Name | Type | Description |
 * | - | - | -
 * |
 * | default_cost | number &#124; null | Default shipping cost, applied either as a percentage of the
 * orderʼs total value or as a fixed amount. If default cost is not required, you can supply a value
 * of null. |
 * | default_cost_type | string | How the default shipping cost is calculated; either
 * `percentage_of_total` or `fixed_amount`. |
 * | range | number | Array of [range](#range) objects. The
 * units for these ranges' `lower_limit` and `upper_limit` properties depend on the default units set
 * in the storeʼs control panel. |
 *
 *
 * #### JSON Example
 * ```json
 * {
 *     "name": "Rate per Weight",
 *
 * "type": "weight",
 *     "settings": {
 *         "default_cost": 12,
 *         "default_cost_type":
 * "fixed_amount",
 *         "range": [
 *             {
 *                 "lower_limit": 0,
 *
 * "upper_limit": 20,
 *                 "shipping_cost": 8
 *             },
 *             {
 *
 * "lower_limit": 20,
 *                 "upper_limit": 40,
 *                 "shipping_cost": 12
 *
 * }
 *         ]
 *     }
 * }
 * ```
 *
 * ### total Object – Properties
 *
 * Object model for shipping quotes by
 * orderʼs total value.
 *
 * | Name | Type | Description |
 * | - | - | - |
 * | default_cost | number &#124;
 * null | Default shipping cost, applied either as a percentage of the orderʼs total value or as a
 * fixed amount. If default cost is not required, you can supply a value of null. |
 * | default_cost_type
 * | string | How the default shipping cost is calculated; either `percentage_of_total` or
 * `fixed_amount`. |
 * | include_order_total_taxes | boolean | Whether or not to include taxes on the
 * orderʼs total value in the shipping cost calculation. |
 * | range | number | Array of [range](#range)
 * objects. The units for these ranges' `lower_limit` and `upper_limit` properties are values in the
 * storeʼs currency. |
 *
 * #### JSON Example
 *
 * This example sets free shipping above a certain order
 * total:
 *
 * ```json
 * {
 *     "name": "Per Total or Free",
 *     "type": "total",
 *     "settings": {
 *
 * "default_cost": 12,
 *         "default_cost_type": "fixed_amount",
 *
 * "include_order_total_taxes": 0,
 *         "range": [
 *             {
 *                 "lower_limit": 0,
 *
 * "upper_limit": 5,
 *                 "shipping_cost": 5
 *             },
 *             {
 *
 * "lower_limit": 5,
 *                 "upper_limit": 10,
 *                 "shipping_cost": 8
 *
 * },
 *             {
 *                 "lower_limit": 10,
 *                 "upper_limit": 20,
 *
 * "shipping_cost": 10
 *             },
 *             {
 *                 "lower_limit": 20,
 *
 * "upper_limit": 49.99,
 *                 "shipping_cost": 15
 *             },
 *             {
 *
 * "lower_limit": 50,
 *                 "upper_limit": 100000,
 *                 "shipping_cost": 0
 *
 * }
 *         ]
 *     }
 * }
 * ```
 *
 * ### Range Object – Properties
 *
 * Object model to define ranges for shipping
 * quotes. Units are defined in the parent object.
 *
 * | Name | Type | Description |
 * | - | - | - |
 * |
 * lower_limit | number | Lower limit for order total. |
 * | upper_limit | number | Upper limit for order
 * total. |
 * | shipping_cost | number | Shipping cost for orders whose total falls between the lower and
 * upper limits. |
 *
 * #### JSON Example
 *
 * ```json
 * {
 *     "lower_limit": 0,
 *     "upper_limit": 20,
 *
 * "shipping_cost": 8
 * }
 * ```
 */
class GetAshippingMethod extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/shipping/zones/{$this->zoneId}/methods/{$this->methodId}";
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 * @param int $methodId ID of the shipping method within the shipping zone.
	 */
	public function __construct(
		protected int $zoneId,
		protected int $methodId,
	) {
	}
}
