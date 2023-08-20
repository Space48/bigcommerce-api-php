<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CheckoutConsignments\CheckoutsConsignmentsByCheckoutIdAndConsignmentIdDelete;
use Space48\BigcommerceApi\Requests\CheckoutConsignments\CheckoutsConsignmentsByCheckoutIdAndConsignmentIdPut;
use Space48\BigcommerceApi\Requests\CheckoutConsignments\CheckoutsConsignmentsByCheckoutIdPost;
use Space48\BigcommerceApi\Resource;

class CheckoutConsignments extends Resource
{
	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $include
	 */
	public function checkoutsConsignmentsByCheckoutIdPost(string $checkoutId, string $include): Response
	{
		return $this->connector->send(new CheckoutsConsignmentsByCheckoutIdPost($checkoutId, $include));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $consignmentId
	 * @param string $include Include to get available shipping options.
	 */
	public function checkoutsConsignmentsByCheckoutIdAndConsignmentIdPut(
		string $checkoutId,
		string $consignmentId,
		string $include,
	): Response
	{
		return $this->connector->send(new CheckoutsConsignmentsByCheckoutIdAndConsignmentIdPut($checkoutId, $consignmentId, $include));
	}


	/**
	 * @param string $checkoutId ID of the checkout; the same as the cart ID.
	 * @param string $consignmentId
	 */
	public function checkoutsConsignmentsByCheckoutIdAndConsignmentIdDelete(
		string $checkoutId,
		string $consignmentId,
	): Response
	{
		return $this->connector->send(new CheckoutsConsignmentsByCheckoutIdAndConsignmentIdDelete($checkoutId, $consignmentId));
	}
}
