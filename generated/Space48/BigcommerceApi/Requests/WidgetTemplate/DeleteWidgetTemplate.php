<?php

namespace Space48\BigcommerceApi\Requests\WidgetTemplate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteWidgetTemplate
 *
 * Deletes a **Widget Template**.
 */
class DeleteWidgetTemplate extends Request
{
	protected Method $method = Method::DELETE;


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
