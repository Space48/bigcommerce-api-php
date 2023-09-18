<?php

namespace Space48\Bigcommerce\Requests\Banners;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBanner
 *
 * Returns a single *Banner*
 */
class GetBanner extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/banners/{$this->id}";
	}


	/**
	 * @param int $id ID of the banner.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
