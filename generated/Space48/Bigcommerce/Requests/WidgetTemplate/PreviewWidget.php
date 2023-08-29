<?php

namespace Space48\Bigcommerce\Requests\WidgetTemplate;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * previewWidget
 *
 * Render a widget template and return the widget html.
 */
class PreviewWidget extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/content/widget-templates/{$this->uuid}/preview";
	}


	/**
	 * @param string $uuid The identifier for a specific widget.
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
