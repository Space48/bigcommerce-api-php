<?php

namespace Space48\BigcommerceApi\Requests\WidgetTemplate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateWidgetTemplate
 *
 * Updates a **Widget Template**.
 */
class UpdateWidgetTemplate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/content/widget-templates/{$this->uuid}";
	}


	/**
	 * @param string $uuid The identifier for a specific template.
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
