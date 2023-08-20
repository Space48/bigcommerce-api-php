<?php

namespace Space48\BigcommerceApi\Requests\Scripts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateScript
 *
 * Updates a *Script*.
 */
class UpdateScript extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/content/scripts/{$this->uuid}";
	}


	/**
	 * @param string $uuid The identifier for a specific script.
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
