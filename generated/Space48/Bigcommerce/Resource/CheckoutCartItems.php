<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutCartItems\CheckoutsCartsItemsItemIdByCheckoutIdAndCartIdDelete;
use Space48\Bigcommerce\Requests\CheckoutCartItems\CheckoutsCartsItemsItemIdByCheckoutIdAndCartIdPut;
use Space48\Bigcommerce\Resource;

class CheckoutCartItems extends Resource
{
	/**
	 * @param string $checkoutId
	 * @param string $cartId
	 * @param string $itemId
	 */
	public function checkoutsCartsItemsItemIdByCheckoutIdAndCartIdPut(
		string $checkoutId,
		string $cartId,
		string $itemId,
	): Response
	{
		return $this->connector->send(new CheckoutsCartsItemsItemIdByCheckoutIdAndCartIdPut($checkoutId, $cartId, $itemId));
	}


	/**
	 * @param string $checkoutId
	 * @param string $cartId
	 * @param string $itemId
	 */
	public function checkoutsCartsItemsItemIdByCheckoutIdAndCartIdDelete(
		string $checkoutId,
		string $cartId,
		string $itemId,
	): Response
	{
		return $this->connector->send(new CheckoutsCartsItemsItemIdByCheckoutIdAndCartIdDelete($checkoutId, $cartId, $itemId));
	}
}
