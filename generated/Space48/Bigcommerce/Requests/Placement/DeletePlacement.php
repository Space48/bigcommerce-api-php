<?php

namespace Space48\Bigcommerce\Requests\Placement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePlacement
 *
 * Deletes a **Placement**.
 */
class DeletePlacement extends Request
{
	protected Method $method = Method::DELETE;


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
