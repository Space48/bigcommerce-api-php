<?php

namespace Space48\BigcommerceApi\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllCoupons
 *
 * ## Usage Notes
 * * Deleting a coupon via this endpoint will delete the coupon but not the promotion it
 * is attached to
 */
class DeleteAllCoupons extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/coupons";
	}


	/**
	 * @param string $idIn Optional param to identify a comma separated list of ids for coupons to delete in a batch. `/api/v2/coupons?id:in=1,2,3`
	 */
	public function __construct(
		protected string $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id:in' => $this->idIn];
	}
}
