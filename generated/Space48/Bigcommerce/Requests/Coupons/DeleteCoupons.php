<?php

namespace Space48\Bigcommerce\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCoupons
 *
 * ## Usage Notes
 * * Deleting a coupon via this endpoint will delete the coupon but not the promotion it
 * is attached to
 */
class DeleteCoupons extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/coupons";
	}


	/**
	 * @param null|string $idIn Optional param to identify a comma separated list of ids for coupons to delete in a batch. `/api/v2/coupons?id:in=1,2,3`
	 */
	public function __construct(
		protected ?string $idIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn]);
	}
}
