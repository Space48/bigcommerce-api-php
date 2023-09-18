<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CheckoutConsignments\AddCheckoutConsignment;
use Space48\Bigcommerce\Requests\CheckoutConsignments\DeleteCheckoutConsignment;
use Space48\Bigcommerce\Requests\CheckoutConsignments\UpdateCheckoutConsignment;
use Space48\Bigcommerce\Resource;

class CheckoutConsignments extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $include
	 */
	public function addCheckoutConsignment(string $checkoutId, ?string $include): Response
	{
		return $this->connector->send(new AddCheckoutConsignment($checkoutId, $include));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $consignmentId
	 * @param string $include Include to get available shipping options.
	 */
	public function updateCheckoutConsignment(string $checkoutId, string $consignmentId, ?string $include): Response
	{
		return $this->connector->send(new UpdateCheckoutConsignment($checkoutId, $consignmentId, $include));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $consignmentId
	 */
	public function deleteCheckoutConsignment(string $checkoutId, string $consignmentId): Response
	{
		return $this->connector->send(new DeleteCheckoutConsignment($checkoutId, $consignmentId));
	}
}
