<?php

namespace Space48\BigcommerceApi\Requests\Placement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updatePlacement
 *
 * Updates a **Placement**.
 */
class UpdatePlacement extends Request
{
	protected Method $method = Method::PUT;


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
