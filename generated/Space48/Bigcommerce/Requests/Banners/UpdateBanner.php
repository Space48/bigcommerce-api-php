<?php

namespace Space48\Bigcommerce\Requests\Banners;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateBanner
 *
 * Updates a *Banner*.
 *
 * **Read Only Fields**
 * * date_created
 * * id
 */
class UpdateBanner extends Request
{
	protected Method $method = Method::PUT;


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
