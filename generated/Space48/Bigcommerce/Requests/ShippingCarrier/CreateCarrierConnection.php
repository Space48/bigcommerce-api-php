<?php

namespace Space48\Bigcommerce\Requests\ShippingCarrier;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCarrierConnection
 *
 * Creates a *Carrier Connection*.
 *
 * Carrier connections refer to specific settings required to connect
 * to a specific shipping carrier. Each carrier requires your app to supply a unique set of
 * properties/fields to establish a connection with that carrier.
 *
 * *Notes:*
 *
 * - There is no `GET` with
 * this resource. It has `PUT`, `POST` and `DELETE`.
 *     * `PUT` is used to update. The connection can
 * be updated by API.
 *
 * - Connections created here do not enable the shipping method. To enable the
 * carrier for a shipping zone, use the Shipping Methods API.
 *
 * - The Carrier Connection resource
 * returns a 204 for both successful and unsuccessful attempts to connect. If a field is missing, it
 * will return a 400.
 *
 * ### Australia Post
 *
 * PUT or POST example request:
 *
 * ```json
 * {
 *   "carrier_id" :
 * "auspost",
 *   "connection" : {
 *     "auth_key" : "yourAusPostAuthKey",
 *     "test_mode" : false
 *
 * }
 * }
 * ```
 *
 * DELETE example request:
 *
 * ```json
 * {
 *   "carrier_id" : "auspost"
 * }
 * ```
 *
 * #### Australia Post
 * Connection Object – Properties
 *
 * Australia Post `PUT` or `POST` requests require all of the
 * following properties. (These requests won’t be fulfilled unless these properties are valid.)
 * `DELETE` requests require only a `carrier_id`.
 *
 *
 * | Property | Type | Description
 * |
 * |:---------|:-----|:------------|
 * | auth_key | string | Australia Post authorization key. |
 * |
 * test_mode | boolean | Whether or not to use Australia Post test-mode settings. Acceptable values are
 * `true` or `false`. |
 *
 *
 * ### Endicia
 * USPS is connected through Endicia.
 *
 * PUT or POST example
 * request:
 *
 * ```json
 * {  "carrier_id" : "endicia",
 *   "connection": {
 *     "account_id" :
 * "yourEndiciaAccountId",
 *     "pass_phrase" : "yourEndiciaPassphrase"
 *   }
 * }
 * ```
 *
 * DELETE example
 * request:
 *
 * ```json
 * {
 *   "carrier_id" : "endicia"
 * }
 * ```
 *
 * #### Endicia Connection Object –
 * Properties
 *
 * Endicia `PUT` or `POST` requests require all of the following properties. (These
 * requests won’t be fulfilled unless these properties are valid.) `DELETE` requests require only a
 * `carrier_id`.
 *
 *
 * | Property | Type | Description |
 * |:---------|:-----|:------------|
 * | account_id |
 * string | Endicia account ID. |
 * | passphrase | string | Endicia passphrase. |
 *
 *
 * ### FedEx
 *
 * PUT or
 * POST example request:
 *
 * ```json
 * {
 *   "carrier_id" : "fedex",
 *   "connection" : {
 *     "key" :
 * "yourFedexKey",
 *     "password" : "yourFedexPassword",
 *     "account_number" :
 * "yourFedexAccountNumber",
 *     "meter_number" : "yourFedexMeterNumber"
 *   }
 * }
 * ```
 *
 * DELETE example
 * request:
 *
 * ```json
 * {
 *   "carrier_id" : "fedex"
 * }
 * ```
 *
 * #### FedEx Connection Object –
 * Properties
 *
 * FedEx `PUT` or `POST` requests require all of the following properties. (These requests
 * won’t be fulfilled unless these properties are valid.) `DELETE` requests require only a
 * `carrier_id`.
 *
 *
 * | Property | Type | Description |
 * |:---------|:-----|:------------|
 * | key | string |
 * FedEx account ID. |
 * | password | string | FedEx passphrase. |
 * | account_number | string | FedEx
 * account number. |
 * | meter_number | string | FedEx meter number. |
 *
 * ### Royal Mail
 *
 * PUT or POST
 * example request:
 *
 * ```json
 * {
 *     "carrier_id" : "royalmail",
 *     "connection" : {
 *
 *
 * }
 * }
 * ```
 *
 * DELETE example request:
 *
 * ```json
 * {
 *     "carrier_id" : "royalmail"
 * }
 * ```
 *
 * #### Royal Mail
 * Connection Object - Properties
 *
 * Royal Mail has no connection object properties.
 *
 * ### Shipping
 * Provider API
 *
 * Please note that this endpoint is not intended for adding connection settings.
 *
 * Its
 * purpose is solely to establish a connection between your BigCommerce store and the carrier. If the
 * carrier has no connection settings configured, please leave the connection property empty. However,
 * if the carrier already has connection settings configured, you can utilize this endpoint to
 * establish the connection using the existing connection properties.
 *
 * PUT or POST example request when
 * your carrier is not configured with any connection settings:
 *
 * ```json filename="No connection
 * settings configured" showLineNumbers copy
 * {
 *   "carrier_id" : "carrier_{your_carrier_id}",
 *
 * "connection" : {}
 * }
 * ```
 *
 * PUT or POST example request when your carrier is configured with connection
 * settings:
 *
 * ```json filename="Connection settings configured" showLineNumbers copy
 * {
 *   "carrier_id" :
 * "carrier_{your_carrier_id}",
 *   "connection" : {
 *     "your_configured_key_1": "value_1",
 *
 * "your_configured_key_2": "value_2
 *   }
 * }
 * ```
 *
 * ### Zoom2U
 *
 * PUT or POST example request:
 *
 * ```json
 * {
 *
 * "carrier_id" : "zoom2u",
 *   "connection" : {
 *     "auth_key" : "yourZoom2uAuthKey",
 *     "test_mode" :
 * false
 *   }
 * }
 * ```
 *
 * DELETE example request:
 *
 * ```json
 * {
 *   "carrier_id" : "zoom2u"
 * }
 * ```
 *
 * #### Zoom2U
 * Connection Object – Properties
 *
 * Zoom2U `PUT` or `POST` requests require all of the following
 * properties. (These requests won’t be fulfilled unless these properties are valid.) `DELETE`
 * requests require only a `carrier_id`.
 *
 *
 * | Property | Type | Description
 * |
 * |:---------|:-----|:------------|
 * | auth_key | string | Zoom2U authorization key. |
 * | test_mode |
 * boolean | Whether or not to use Zoom2U test-mode settings. Acceptable values are `true` or `false`.
 * |
 */
class CreateCarrierConnection extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/shipping/carrier/connection";
	}


	public function __construct()
	{
	}
}
