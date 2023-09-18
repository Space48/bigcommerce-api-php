<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Coupons\CreateCoupon;
use Space48\Bigcommerce\Requests\Coupons\DeleteCoupon;
use Space48\Bigcommerce\Requests\Coupons\DeleteCoupons;
use Space48\Bigcommerce\Requests\Coupons\GetCoupons;
use Space48\Bigcommerce\Requests\Coupons\GetCouponsCount;
use Space48\Bigcommerce\Requests\Coupons\UpdateCoupon;
use Space48\Bigcommerce\Resource;

class Coupons extends Resource
{
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
	public function getCoupons(
		?string $id,
		?string $code,
		?string $name,
		?string $type,
		?int $minId,
		?int $maxId,
		?string $excludeType,
	): Response
	{
		return $this->connector->send(new GetCoupons($id, $code, $name, $type, $minId, $maxId, $excludeType));
	}


	public function createCoupon(): Response
	{
		return $this->connector->send(new CreateCoupon());
	}


	/**
	 * @param string $idIn Optional param to identify a comma separated list of ids for coupons to delete in a batch. `/api/v2/coupons?id:in=1,2,3`
	 */
	public function deleteCoupons(?string $idIn): Response
	{
		return $this->connector->send(new DeleteCoupons($idIn));
	}


	public function getCouponsCount(): Response
	{
		return $this->connector->send(new GetCouponsCount());
	}


	/**
	 * @param float|int $id ID of the coupon.
	 */
	public function updateCoupon(float|int $id): Response
	{
		return $this->connector->send(new UpdateCoupon($id));
	}


	/**
	 * @param float|int $id ID of the coupon.
	 */
	public function deleteCoupon(float|int $id): Response
	{
		return $this->connector->send(new DeleteCoupon($id));
	}
}
