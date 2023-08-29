<?php

namespace Space48\Bigcommerce\Requests\Placement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPlacement
 *
 * Returns a single **Placement**.
 */
class GetPlacement extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/placements/{$this->uuid}";
	}


	/**
	 * @param string $uuid The identifier for a specific placement.
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
