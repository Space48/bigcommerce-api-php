<?php

namespace Space48\Bigcommerce\Requests\Scripts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getScript
 *
 * Returns a single *Script*.
 */
class GetScript extends Request
{
	protected Method $method = Method::GET;


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
