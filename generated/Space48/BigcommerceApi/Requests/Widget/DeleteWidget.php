<?php

namespace Space48\BigcommerceApi\Requests\Widget;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteWidget
 *
 * Deletes a **Widget**.
 */
class DeleteWidget extends Request
{
	protected Method $method = Method::DELETE;


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
