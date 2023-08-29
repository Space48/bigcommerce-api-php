<?php

namespace Space48\Bigcommerce\Requests\Banners;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllBanners
 *
 * Returns a list of *Banners*. Default sorting is by banner id, from lowest to highest.
 */
class GetAllBanners extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/banners";
	}


	/**
	 * @param int $minId Optional filter param `/api/v2/banners?min_id={value}`
	 * @param int $maxId Optional filter param `/api/v2/banners?max_id={value}`
	 */
	public function __construct(
		protected int $minId,
		protected int $maxId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['min_id' => $this->minId, 'max_id' => $this->maxId];
	}
}
