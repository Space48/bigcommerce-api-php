<?php

namespace Space48\BigcommerceApi\Requests\Widget;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWidget
 *
 * Returns a single **Widget**.
 */
class GetWidget extends Request
{
	protected Method $method = Method::GET;


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
