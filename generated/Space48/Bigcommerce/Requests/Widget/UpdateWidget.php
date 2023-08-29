<?php

namespace Space48\Bigcommerce\Requests\Widget;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateWidget
 *
 * Updates a **Widget**.
 */
class UpdateWidget extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/content/widgets/{$this->uuid}";
	}


	/**
	 * @param string $uuid The identifier for a specific widget.
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
