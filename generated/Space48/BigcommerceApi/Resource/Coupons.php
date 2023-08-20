<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Coupons\CreateAnewCoupon;
use Space48\BigcommerceApi\Requests\Coupons\DeleteAcoupon;
use Space48\BigcommerceApi\Requests\Coupons\DeleteAllCoupons;
use Space48\BigcommerceApi\Requests\Coupons\GetAcountOfCoupons;
use Space48\BigcommerceApi\Requests\Coupons\GetAllCoupons;
use Space48\BigcommerceApi\Requests\Coupons\UpdateAcoupon;
use Space48\BigcommerceApi\Resource;

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
	public function getAllCoupons(
		string $id,
		string $code,
		string $name,
		string $type,
		int $minId,
		int $maxId,
		string $excludeType,
	): Response
	{
		return $this->connector->send(new GetAllCoupons($id, $code, $name, $type, $minId, $maxId, $excludeType));
	}


	public function createAnewCoupon(): Response
	{
		return $this->connector->send(new CreateAnewCoupon());
	}


	/**
	 * @param string $idIn Optional param to identify a comma separated list of ids for coupons to delete in a batch. `/api/v2/coupons?id:in=1,2,3`
	 */
	public function deleteAllCoupons(string $idIn): Response
	{
		return $this->connector->send(new DeleteAllCoupons($idIn));
	}


	public function getAcountOfCoupons(): Response
	{
		return $this->connector->send(new GetAcountOfCoupons());
	}


	/**
	 * @param float|int $id ID of the coupon.
	 */
	public function updateAcoupon(float|int $id): Response
	{
		return $this->connector->send(new UpdateAcoupon($id));
	}


	/**
	 * @param float|int $id ID of the coupon.
	 */
	public function deleteAcoupon(float|int $id): Response
	{
		return $this->connector->send(new DeleteAcoupon($id));
	}
}
