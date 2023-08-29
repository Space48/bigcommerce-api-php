<?php

namespace Space48\Bigcommerce\Requests\Scripts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteScript
 *
 * Deletes a *Script*.
 */
class DeleteScript extends Request
{
	protected Method $method = Method::DELETE;


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
