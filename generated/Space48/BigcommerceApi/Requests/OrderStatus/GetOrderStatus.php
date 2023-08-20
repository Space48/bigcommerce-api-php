<?php

namespace Space48\BigcommerceApi\Requests\OrderStatus;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getOrderStatus
 *
 * Returns a Collection of All Order Statuses.
 *
 * **Order Status Descriptions:**
 * |Status ID | Name  |
 * Description |
 * |--|--|--|
 * | 0 | Incomplete  | An incomplete order happens when a shopper reached the
 * payment page, but did not complete the transaction. |
 * | 1 | Pending |Customer started the checkout
 * process, but did not complete it. |
 * | 2 | Shipped | Order has been shipped, but receipt has not been
 * confirmed; seller has used the Ship Items action. |
 * | 3 | Partially Shipped | Only some items in the
 * order have been shipped, due to some products being pre-order only or other reasons. |
 * | 4 |
 * Refunded | Seller has used the Refund action. |
 * | 5 | Cancelled | Seller has cancelled an order, due
 * to a stock inconsistency or other reasons. |
 * | 6 |Declined | Seller has marked the order as declined
 * for lack of manual payment, or other reasons. |
 * | 7 | Awaiting Payment | Customer has completed
 * checkout process, but payment has yet to be confirmed. |
 * | 8 | Awaiting Pickup | Order has been
 * pulled, and is awaiting customer pickup from a seller-specified location. |
 * | 9 | Awaiting Shipment
 * | Order has been pulled and packaged, and is awaiting collection from a shipping provider. |
 * | 10 |
 * Completed | Client has paid for their digital product and their file(s) are available for download.
 * |
 * | 11 | Awaiting Fulfillment | Customer has completed the checkout process and payment has been
 * confirmed. |
 * | 12 | Manual Verification Required | Order is on hold while some aspect needs to be
 * manually confirmed. |
 * | 13 | Disputed | Customer has initiated a dispute resolution process for the
 * PayPal transaction that paid for the order. |
 * | 14 | Partially Refunded | Seller has partially
 * refunded the order. |
 */
class GetOrderStatus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/order_statuses";
	}


	public function __construct()
	{
	}
}
