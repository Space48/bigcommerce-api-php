<?php

namespace Space48\BigcommerceApi\Requests\OrderShipments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createOrderShipments
 *
 * Creates an *Order Shipment*. For more details, see [Shipping an
 * Order](/api-docs/orders/orders-api-overview#creating-order-shipments).
 *
 * **Required Fields**
 * *
 * order_address_id
 * *   items
 *
 * **Usage notes**
 *
 * There are three methods for generating a tracking link
 * for a shipment:
 *
 * 1. Use `shipping_provider` and `tracking_number`: This generates an automatic
 * tracking link that you can click from the BigCommerce control panel and customer-facing emails.
 * However, the `tracking_link` property in the API response will remain empty.
 *
 * 2. Use
 * `tracking_carrier` and `tracking_number`: This also creates an automatic tracking link that you can
 * click in both the BigCommerce control panel and customer-facing emails. Like the previous method,
 * the `tracking_link` property in the API response will be empty.
 *
 * 3. Supply a custom `tracking_link`:
 * By providing a value for the `tracking_link` property, you can use your own tracking link within the
 * BigCommerce control panel and in customer-facing emails. The API response will return your supplied
 * `tracking_link` as part of the response.
 *
 * Acceptable values for `shipping_provider` include an
 * empty string (`""`), `auspost`, `carrier_{your_carrier_id}` (only used if the carrier is a
 * [third-party Shipping Provider](/api-docs/providers/shipping)), `canadapost`, `endicia`, `usps`,
 * `fedex`, `royalmail`, `ups`, `upsready`, `upsonline`, or `shipperhq`.
 *
 * Acceptable values for
 * `tracking_carrier` include an empty string (`""`) or one of the valid [tracking-carrier
 * values](https://github.com/bigcommerce/dev-docs/blob/master/assets/csv/tracking_carrier_values.csv).
 */
class CreateOrderShipments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderId}/shipments";
	}


	/**
	 * @param int $orderId ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
