<?php

namespace Space48\Bigcommerce\Requests\Banners;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteBanner
 *
 * Deletes a *Banner*.
 */
class DeleteBanner extends Request
{
	protected Method $method = Method::DELETE;


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
