<?php

namespace Space48\BigcommerceApi\Requests\ShippingMethod;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createAShippingMethod
 *
 * Creates a *Shipping Method* within a shipping zone. Real Time Carrier Connections are also supported
 * by this endpoint.
 *
 * ## Carrier Configurations – Current
 *
 * This section provides a sample request
 * and a carrier-specific object/property model, for each supported carrier.
 *
 * ### USPS by
 * Endicia
 *
 * Example request body:
 *
 * ```json
 * {
 *     "name": "USPS by Endicia",
 *     "type": "endicia",
 *
 * "settings": {
 *         "carrier_options": {
 *             "delivery_services" :
 * ["PriorityExpress","Priority", "PriorityMailExpressInternational"],
 *             "packaging_type" :
 * "LargeFlatRateBox",
 *             "show_transit_time" : true
 *         }
 *     },
 *     "enabled":
 * true
 * }
 * ```
 *
 * #### USPS by Endicia Object Properties
 *
 * | Property | Type | Values
 * |
 * |:---------|:-----|:-------|
 * | delivery_services | array | PriorityExpress,
 * PriorityMailExpressInternational, FirstClassPackageInternationalService, Priority,
 * PriorityMailInternational, First, ParcelSelect, MediaMail |
 * | packaging_type | array |
 * FlatRateLegalEnvelope, FlatRatePaddedEnvelope, Parcel, SmallFlatRateBox, MediumFlatRateBox,
 * LargeFlatRateBox, FlatRateEnvelope, RegionalRateBoxA, RegionalRateBoxB |
 * |show_transit_time |
 * boolean | true, false |
 *
 * ### FedEx
 *
 * Example request body:
 *
 * ```json
 * {
 *     "name": "FEDEX",
 *
 * "type": "fedex",
 *     "settings": {
 *         "carrier_options": {
 *             "delivery_services": [
 *
 * "PRIORITY_OVERNIGHT",
 *                 "FEDEX_2_DAY"
 *             ],
 *             "dropoff_type":
 * "REGULAR_PICKUP",
 *             "packaging_type": "FEDEX_ENVELOPE",
 *             "packing_method":
 * "SEPARATE",
 *             "rate_type": "NONE",
 *             "include_package_value": true,
 *
 * "destination_type": "residential"
 *         }
 *     },
 *     "enabled": true
 * }
 *
 * ```
 *
 * #### FedEx Object
 * Properties
 *
 * | Property | Type | Values |
 * |:---------|:-----|:-------|
 * | delivery_services | array |
 * PRIORITY_OVERNIGHT, STANDARD_OVERNIGHT, FIRST_OVERNIGHT, FEDEX_2_DAY, FEDEX_EXPRESS_SAVER,
 * INTERNATIONAL_PRIORITY, INTERNATIONAL_ECONOMY, INTERNATIONAL_FIRST, FEDEX_1_DAY_FREIGHT,
 * FEDEX_2_DAY_FREIGHT, FEDEX_3_DAY_FREIGHT, FEDEX_GROUND, GROUND_HOME_DELIVERY,
 * INTERNATIONAL_PRIORITY_FREIGHT, INTERNATIONAL_ECONOMY_FREIGHT, EUROPE_FIRST_INTERNATIONAL_PRIORITY
 * |
 * | dropoff_type | string | REGULAR_PICKUP, REQUEST_COURIER, DROP_BOX, BUSINESS_SERVICE_CENTER,
 * STATION |
 * | packaging_type | string | FEDEX_ENVELOPE,  FEDEX_PAK, FEDEX_BOX, FEDEX_TUBE,
 * FEDEX_10KG_BOX, FEDEX_25KG_BOX, YOUR_PACKAGING |
 * | packing_method | string | SEPARATE, COMBINED |
 * |
 * rate_type | string | NONE, LIST |
 * | include_package_value | boolean | true, false |
 * |
 * destination_type | string | residential, business |
 *
 *
 * ### UPS Ready
 *
 * Example request
 * body:
 *
 * ```json
 * {
 *     "name": "UPS ready",
 *     "type": "upsready",
 *     "settings": {
 *
 * "carrier_options": {
 *             "delivery_services": [
 *                 "2nd_Day_Air","Standard"
 *
 * ],
 *             "packaging_type": "21",
 *             "packing_method": "separate",
 *
 * "include_package_value": true,
 *             "destination_type": "residential",
 *
 * "show_transit_time" : true
 *         }
 *     },
 *     "enabled": true
 * }
 *
 * ```
 *
 * #### UPS Ready Object
 * Properties
 *
 * | Property | Type | Values |
 * |:---------|:-----|:-------|
 * | delivery_services | array |
 * 2nd_Day_Air, 2nd_Day_Air_AM, 3_Day_Select, Expedited, Express, Express_Plus, Express_Saver,
 * Express_Early_AM, Ground, Next_Day_Air, Next_Day_Air_Early_AM, Next_Day_Air_Saver, Saver, Standard,
 * Today_Dedicated_Courier, Today_Express, Today_Express_Saver, Today_Intercity, Today_Standard,
 * Worldwide_Expedited, Worldwide_Express, Worldwide_Express_Plus, Worldwide_Express_Saver,
 * Worldwide_Saver |
 * | destination_type | string | residential, business |
 * | packing_method | string |
 * separate, combined |
 * | packaging_type | string (only codes allowed) | See the following table |
 * |
 * include_package_value | boolean | true, false |
 * | show_transit_time | boolean | true, false |
 *
 * UPS
 * `packaging_type` values include:
 *
 * | Code | Description |
 * |:----:|:------------|
 * | 21 | UPS® Express
 * Box |
 * | 24 | UPS® 25 KG Box |
 * | 25 | UPS® 10 KG Box |
 * | 30 | Pallet |
 * | 01 | UPS® Letter |
 * | 02 |
 * Customer Supplied Package |
 * | 03 | Tube |
 * | 04 | PAK |
 * | 2a | Small Express Box |
 * | 2b | Medium
 * Express Box |
 * | 2c | Large Express Box |
 *
 *
 * ### Canada Post
 *
 * Example request body:
 *
 * ```json
 * {
 *
 * "name": "Canada Post",
 *     "type": "canadapost",
 *     "settings": {
 *         "carrier_options": {
 *
 * "delivery_services": [
 *                 "DOM.RP","DOM.EP"
 *             ]
 *         }
 *     },
 *
 * "enabled": true
 * }
 *
 * ```
 *
 * #### Canada Post Object Properties
 *
 * | Property | Type | Values
 * |
 * |:---------|:-----|:-------|
 * | delivery_services | array | DOM.RP, DOM.EP, DOM.XP, DOM.XP.CERT,
 * DOM.PC DOM.LIB, USA.EP, USA.PW.ENV, USA.PW.PAK, USA.PW.PARCEL, USA.SP.AIR, USA.TP, USA.TP.LVM,
 * USA.XP, INT.XP, INT.IP.AIR, INT.IP.SURF, INT.PW.ENV, INT.PW.PAK, INT.PW.PARCEL, INT.SP.AIR,
 * INT.SP.SURF, INT.TP |
 *
 * ### Australia Post
 *
 * Example request body:
 *
 * ```json
 * {
 *     "name": "Australia
 * Post",
 *     "type": "auspost",
 *     "settings": {
 *         "carrier_options": {
 *
 * "delivery_services": [
 *                 "AUS_PARCEL_REGULAR",
 *         "AUS_PARCEL_EXPRESS"
 *
 * ]
 *         }
 *     },
 *     "enabled": true
 * }
 *
 * ```
 *
 * #### Australia Post Object Properties
 *
 * | Property |
 * Type | Values |
 * |:---------|:-----|:-------|
 * | delivery_services | array | AUS_LETTER_REGULAR_SMALL,
 * AUS_LETTER_REGULAR_Large, AUS_LETTER_EXPRESS_SMALL, AUS_LETTER_EXPRESS_MEDIUM,
 * AUS_LETTER_EXPRESS_LARGE, AUS_PARCEL_REGULAR, AUS_PARCEL_REGULAR_SATCHEL_500G,
 * AUS_PARCEL_REGULAR_SATCHEL_3KG, AUS_PARCEL_REGULAR_SATCHEL_5KG, AUS_PARCEL_EXPRESS,
 * AUS_PARCEL_EXPRESS_SATCHEL_500G, AUS_PARCEL_EXPRESS_SATCHEL_3KG, AUS_PARCEL_EXPRESS_SATCHEL_5KG,
 * AUS_PARCEL_COURIER, AUS_PARCEL_COURIER_SATCHEL_MEDIUM, INT_PARCEL_COR_OWN_PACKAGING,
 * INT_PARCEL_EXP_OWN_PACKAGING, INT_PARCEL_STD_OWN_PACKAGING, INT_PARCEL_AIR_OWN_PACKAGING,
 * INT_PARCEL_SEA_OWN_PACKAGING |
 *
 * ### Royal Mail
 *
 * Example request body:
 *
 * ```json
 * {
 *     "name": "Royal
 * Mail",
 *     "type": "royalmail",
 *     "settings": {
 *         "carrier_options": {
 *
 * "delivery_services": [
 *                 "StandardFirstClass",
 *                 "StandardSecondClass"
 *
 * ]
 *         }
 *     },
 *     "enabled": true
 * }
 * ```
 *
 * #### Royal Mail Object Properties
 *
 * | Property | Type |
 * Values |
 * |:---------|:-----|:-------|
 * | delivery_services | array | SpecialDelivery1pm,
 * SpecialDelivery9am, SpecialDelivery1pmSaturday, SpecialDelivery9amSaturday, SignedForFirstClass,
 * SignedForSecondClass, Express9, Express10, ExpressAM, Express24, Express48, StandardFirstClass,
 * StandardSecondClass, InternationalStandard, InternationalTracked, InternationalEconomy |
 *
 * ###
 * Zoom2U
 *
 * Example request body:
 *
 * ```json
 * {
 *     "name": "Zoom2U",
 *     "type": "zoom2u",
 *     "settings":
 * {
 *         "carrier_options": {
 *             "delivery_services": [
 *                 "3_hour",
 *
 * "Same_day",
 *         "VIP"
 *             ]
 *         }
 *     },
 *     "enabled": true
 * }
 * ```
 *
 * #### Zoom2U
 * Object Properties
 *
 * | Property | Type | Values |
 * |:---------|:-----|:-------|
 * | delivery_services |
 * array | 3_hour, Same_day, VIP|
 *
 * ### Settings Objects
 *
 * A shipping methodʼs `type` and `settings`
 * properties can match one of the following models:
 *
 * #### perorder Object – Properties
 *
 * Object
 * model for flat-rate shipping quotes per order.
 *
 * | Property | Type | Description
 * |
 * |:---------|:-----|:------------|
 * | rate | number | Flat rate per order. |
 *
 * Example request body:
 *
 *
 * ```json
 * {
 *   "name": "Flat Rate per Order",
 *   "type": "perorder",
 *   "settings": {
 *     "rate": 7
 *
 * }
 * }
 * ```
 *
 * #### peritem Object – Properties
 *
 * Object model for flat-rate shipping quotes per item
 * ordered.
 *
 * | Name | Type | Description |
 * |:-----|:-----|:------------|
 * | rate | number | Flat rate
 * per item. |
 *
 * Ezample request body:
 *
 * ```json
 * {
 *   "name": "Flat Rate per Item",
 *   "type": "peritem",
 *
 * "settings": {
 *     "rate": 8
 *   }
 * }
 * ```
 *
 * #### weight Object – Properties
 *
 * Object model for shipping
 * quotes by weight.
 *
 * | Property | Type | Description |
 * |:---------|:-----|:------------|
 * |
 * default_cost | number &#124; null | Default shipping cost, applied either as a percentage of the
 * orderʼs total value or as a fixed amount. If default cost is not required, you can supply a value
 * of null. |
 * | default_cost_type | string | How the default shipping cost is calculated; either
 * `percentage_of_total` or `fixed_amount`. |
 * | range | number | Array of [range](#range) objects. The
 * units for these ranges' `lower_limit` and `upper_limit` properties depend on the default units set
 * in the storeʼs control panel. |
 *
 * Example request body:
 *
 * ```json
 * {
 *   "name": "Rate per Weight",
 *
 * "type": "weight",
 *   "settings": {
 *     "default_cost": 12,
 *     "default_cost_type": "fixed_amount",
 *
 * "range": [
 *       {
 *         "lower_limit": 0,
 *         "upper_limit": 20,
 *         "shipping_cost": 8
 *
 * },
 *       {
 *         "lower_limit": 20,
 *         "upper_limit": 40,
 *         "shipping_cost": 12
 *
 * }
 *     ]
 *   }
 * }
 * ```
 *
 * #### total Object – Properties
 *
 * Object model for shipping quotes by orderʼs
 * total value.
 *
 * | Property | Type | Description |
 * |:---------|:-----|:------------|
 * | default_cost |
 * number &#124; null | Default shipping cost, applied either as a percentage of the orderʼs total
 * value or as a fixed amount. If default cost is not required, you can supply a value of null. |
 * |
 * default_cost_type | string | How the default shipping cost is calculated; either
 * `percentage_of_total` or `fixed_amount`. |
 * | include_order_total_taxes | boolean | Whether or not to
 * include taxes on the orderʼs total value in the shipping cost calculation. |
 * | range | number |
 * Array of [range](#range) objects. The units for these ranges' `lower_limit` and `upper_limit`
 * properties are values in the storeʼs currency. |
 *
 * Example request body:
 *
 * This example sets free
 * shipping above a certain order total:
 *
 * ```json
 * {
 *   "name": "Per Total or Free",
 *   "type": "total",
 *
 * "settings": {
 *     "default_cost": 12,
 *     "default_cost_type": "fixed_amount",
 *
 * "include_order_total_taxes": 0,
 *     "range": [
 *       {
 *         "lower_limit": 0,
 *
 * "upper_limit": 5,
 *         "shipping_cost": 5
 *       },
 *       {
 *         "lower_limit": 5,
 *
 * "upper_limit": 10,
 *         "shipping_cost": 8
 *       },
 *       {
 *         "lower_limit": 10,
 *
 * "upper_limit": 20,
 *         "shipping_cost": 10
 *       },
 *       {
 *         "lower_limit": 20,
 *
 * "upper_limit": 49.99,
 *         "shipping_cost": 15
 *       },
 *       {
 *         "lower_limit": 50,
 *
 * "upper_limit": 100000,
 *         "shipping_cost": 0
 *       }
 *     ]
 *   }
 * }
 * ```
 *
 * #### Range Object
 * – Properties
 *
 * Object model to define ranges for shipping quotes. Units are defined in the parent
 * object.
 *
 * | Property | Type | Description |
 * |:---------|:-----|:------------|
 * | lower_limit | number
 * | Lower limit for order total. |
 * | upper_limit | number | Upper limit for order total. |
 * |
 * shipping_cost | number | Shipping cost for orders whose total falls between the lower and upper
 * limits. |
 *
 *
 * Example request body:
 *
 * ```json
 * {
 *   "lower_limit": 0,
 *   "upper_limit": 20,
 *
 * "shipping_cost": 8
 * }
 * ```
 */
class CreateAshippingMethod extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/shipping/zones/{$this->zoneId}/methods";
	}


	/**
	 * @param int $zoneId ID of the shipping zone.
	 */
	public function __construct(
		protected int $zoneId,
	) {
	}
}
